<?php
namespace Classes;

class DatabaseShell
{
    private $link;

    public function __construct($host, $user, $password, $database)
    {
        $this->link = mysqli_connect($host, $user, $password, $database);
        mysqli_query($this->link, "SET NAMES 'utf8'");
    }
    public function save($table, $data)
    {
        foreach ($data as $key => $value){
            $keys .= "`$key`, ";
            $values .= "'$value', ";
        }
        $keys = substr($keys, 0, mb_strlen($keys) - 2);
        $values = substr($values, 0, mb_strlen($values) - 2);
        $query = "INSERT INTO `$table` (`id`, $keys) VALUES (NULL, $values)";
        mysqli_query($this->link, $query);
        return $this;
    }
    public function del($table, $id)
    {
        $query = "DELETE FROM $table WHERE `id` = $id";
        mysqli_query($this->link, $query);
        return $this;
    }
    public function delAll($table, $ids)
    {
        foreach ($ids as $id){
            $this->del($table, $id);
        }
        return $this;
    }
    public function get($table, $id)
    {
        $query = "SELECT * FROM $table WHERE `id` = $id";
        $record = mysqli_query($this->link, $query);
        return $record;
    }
    public function getAll($table, $ids)
    {
        foreach ($ids as $id){
            $records[] = $this->get($table, $id);
        }
        return $records;
    }
    public function selectAll($table, $condition)
    {
        $query = "SELECT * FROM $table WHERE " . $condition;
        $records = mysqli_query($this->link, $query);
        return $records;
    }
}
?>