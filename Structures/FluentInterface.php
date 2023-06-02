<?php
//
///**
// * Аналог Builder
// */
//interface Query{
//    /**
//     * @param string $table
//     * @return object
//     */
//    public function table(string $table): object;
//
//    /**
//     * @param array $fields
//     * @return object
//     */
//    public function select(array $fields): object;
//
//    /**
//     * @param string $field
//     * @param string $direction
//     * @return object
//     */
//    public function orderBy(string $field, string $direction = 'ASC'): object;
//
//    /**
//     * @return string
//     */
//    public function build(): string;
//
//}
//class QueryBuilder implements Query
//{
//    /**
//     * @var string
//     */
//    private string $table;
//    /**
//     * @var array
//     */
//    private array $fields = array();
//    /**
//     * @var array
//     */
//    private array $conditions = array();
//    /**
//     * @var string
//     */
//    private string $orderBy;
//
//    /**
//     * @param string $table
//     * @return object
//     */
//    public function table(string $table): object
//    {
//        $this->table = $table;
//        return $this;
//    }
//
//    /**
//     * @param array $fields
//     * @return object
//     */
//    public function select(array $fields): object
//    {
//        $this->fields = $fields;
//        return $this;
//    }
//
//    /**
//     * @param string $column
//     * @param string $operator
//     * @param string $value
//     * @return object
//     */
//    public function where(string $column, string $operator, string $value): object
//    {
//        $this->conditions[] = "$column $operator $value";
//        return $this;
//    }
//
//    /**
//     * @param string $field
//     * @param $direction
//     * @return object
//     */
//    public function orderBy(string $field, $direction = 'ASC'): object
//    {
//        $this->orderBy = "ORDER BY $field $direction";
//        return $this;
//    }
//
//    /**
//     * @return string
//     */
//    public function build(): string
//    {
//        $query = "SELECT " . implode(', ', $this->fields) . " FROM " . $this->table;
//
//        if (!empty($this->conditions)) {
//            $query .= " WHERE " . implode(' AND ', $this->conditions);
//        }
//
//        if (!empty($this->orderBy)) {
//            $query .= " " . $this->orderBy;
//        }
//
//        return $query;
//    }
//}
//
//$query = new QueryBuilder();
//
//$sql = $query->table('users')
//    ->select(['name', 'email'])
//    ->where('age', '>', 18)
//    ->orderBy('name', 'ASC')
//    ->build();
//
//echo $sql;
