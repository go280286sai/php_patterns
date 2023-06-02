<?php
//
///**
// * Позволяет сгруппировать множество объектов в древовидную структуру, а затем работать с ней так,
// * как будто это единичный объект.
// */
//interface Render
//{
//    /**
//     * @return string
//     */
//    public function render(): string;
//}
//
//class Composite
//{
//    /**
//     * @var array
//     */
//    private array $components = array();
//    /**
//     * @var string
//     */
//    private string $result = '';
//
//    /**
//     * @return string
//     */
//    public function render(): string
//    {
//        foreach ($this->components as $value) {
//            $this->result .= $value;
//        }
//        return $this->result;
//    }
//
//    /**
//     * @param Render $render
//     * @return void
//     */
//    public function add(Render $render): void
//    {
//        $this->components[] = $render->render();
//    }
//}
//
//class From implements Render
//{
//    /**
//     * @var string
//     */
//    public string $name;
//
//    /**
//     * @param string $name
//     */
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return string
//     */
//    public function render(): string
//    {
//        return $this->name;
//    }
//}
//
//class To implements Render
//{
//    /**
//     * @var string
//     */
//    public string $name;
//
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return string
//     */
//    public function render(): string
//    {
//        return $this->name;
//    }
//}
//
//class Text implements Render
//{
//    /**
//     * @var string
//     */
//    public string $name;
//
//    /**
//     * @param string $name
//     */
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return string
//     */
//    public function render(): string
//    {
//        return $this->name;
//    }
//}
//
//$mail = new Composite();
//$mail->add(new From("admin@admin.ua"));
//$mail->add(new To("user@admin.ua"));
//$mail->add(new Text("This is text message"));
//echo $mail->render();
