<?php
namespace Classes;

class Validator
{
    public function isEmail($str)
    {
        return filter_var($str, FILTER_VALIDATE_EMAIL);
    }

    public function isDomain($str)
    {
        return filter_var($str, FILTER_VALIDATE_URL);
    }
    public function inRange($num, $from, $to)
    {
        $arr = range($from, $to);
        if (in_array($num, $arr)){
            return $num;
        }
        return false;
    }
    public function inLength($str, $from, $to)
    {
        $arr = range($from, $to);
        if (in_array(mb_strlen($str), $arr)){
            return $str;
        }
        return false;
    }
}
?>