<?php

/**
 * Позволяет передавать запросы последовательно по цепочке обработчиков. Каждый последующий обработчик решает,
 * может ли он обработать запрос сам и стоит ли передавать запрос дальше по цепи.
 */

abstract class Middleware
{
    /**
     * @var Middleware
     */
    private Middleware $next;

    /**
     * Этот метод можно использовать для построения цепочки объектов middleware.
     */
    public function linkWith(Middleware $next): Middleware
    {
        $this->next = $next;

        return $next;
    }

    /**
     * Подклассы должны переопределить этот метод, чтобы предоставить свои
     * собственные проверки. Подкласс может обратиться к родительской реализации
     * проверки, если сам не в состоянии обработать запрос.
     */
    public function check(string $email, string $password): bool
    {

        return $this->next->check($email, $password);
    }
}

/**
 * Это Конкретное Middleware проверяет, существует ли пользователь с указанными
 * учётными данными.
 */
class UserExistsMiddleware extends Middleware
{
    /**
     * @var Server
     */
    private Server $server;

    /**
     * @param Server $server
     */
    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            echo "UserExistsMiddleware: This email is not registered!\n";

            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo "UserExistsMiddleware: Wrong password!\n";

            return false;
        }

        return parent::check($email, $password);
    }
}

/**
 * Это Конкретное Middleware проверяет, имеет ли пользователь, связанный с
 * запросом, достаточные права доступа.
 */
class RoleCheckMiddleware extends Middleware
{
    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        if ($email === "admin@example.com") {
            echo "RoleCheckMiddleware: Hello, admin!\n";

            return true;
        }
        echo "RoleCheckMiddleware: Hello, user!\n";

        return parent::check($email, $password);
    }
}

/**
 * Это Конкретное Middleware проверяет, не было ли превышено максимальное число
 * неудачных запросов авторизации.
 */
class ThrottlingMiddleware extends Middleware
{
    /**
     * @var int
     */
    private int $requestPerMinute;
    /**
     * @var string
     */
    private string $request;
    /**
     * @var int
     */
    private int $currentTime;

    /**
     * @param int $requestPerMinute
     */
    public function __construct(int $requestPerMinute)
    {
        $this->requestPerMinute = $requestPerMinute;
        $this->currentTime = time();
    }

    /**
     * Обратите внимание, что вызов parent::check можно вставить как в начале
     * этого метода, так и в конце.
     * Это даёт значительно большую свободу действий, чем простой цикл по всем
     * объектам middleware. Например, middleware может изменить порядок
     * проверок, запустив свою проверку после всех остальных.
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        if (time() > $this->currentTime + 60) {
            $this->request = 0;
            $this->currentTime = time();
        }

        $this->request++;

        if ($this->request > $this->requestPerMinute) {
            echo "ThrottlingMiddleware: Request limit exceeded!\n";
            die();
        }

        return parent::check($email, $password);
    }
}

/**
 * Это класс приложения, который осуществляет реальную обработку запроса. Класс
 * Сервер использует паттерн CoR для выполнения набора различных промежуточных
 * проверок перед запуском некоторой бизнес-логики, связанной с запросом.
 */
class Server
{
    /**
     * @var array
     */
    private array $users = [];

    /**
     * @var Middleware
     */
    private Middleware $middleware;

    /**
     * Клиент может настроить сервер с помощью цепочки объектов middleware.
     */
    public function setMiddleware(Middleware $middleware): void
    {
        $this->middleware = $middleware;
    }

    /**
     * Сервер получает email и пароль от клиента и отправляет запрос авторизации
     * в middleware.
     */
    public function logIn(string $email, string $password): bool
    {
        if ($this->middleware->check($email, $password)) {
            echo "Server: Authorization has been successful!\n";

            // Выполняем что-нибудь полезное для авторизованных пользователей.

            return true;
        }

        return false;
    }

    /**
     * @param string $email
     * @param string $password
     * @return void
     */
    public function register(string $email, string $password): void
    {
        $this->users[$email] = $password;
    }

    /**
     * @param string $email
     * @return bool
     */
    public function hasEmail(string $email): bool
    {
        return isset($this->users[$email]);
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function isValidPassword(string $email, string $password): bool
    {
        return $this->users[$email] === $password;
    }
}

/**
 * Клиентский код.
 */
$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

// Все middleware соединены в цепочки. Клиент может построить различные
// конфигурации цепочек в зависимости от своих потребностей.
$middleware = new ThrottlingMiddleware(2);
$middleware
    ->linkWith(new UserExistsMiddleware($server))
    ->linkWith(new RoleCheckMiddleware());

// Сервер получает цепочку из клиентского кода.
$server->setMiddleware($middleware);

// ...

do {
    echo "\nEnter your email:\n";
    $email = readline();
    echo "Enter your password:\n";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!$success);
