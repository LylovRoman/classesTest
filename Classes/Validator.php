<?php
class Validator
{
    public function isEmail($str)
    {
        // проверяет строку на то, что она корректный email
    }

    public function isDomain($str)
    {
        // проверяет строку на то, что она корректное имя домена
    }

    public function inRange($num, $from, $to)
    {
        // проверяет число на то, что оно входит в диапазон
    }

    public function inLength($str, $from, $to)
    {
        // проверяет строку на то, что ее длина входит в диапазон
    }
}
?>