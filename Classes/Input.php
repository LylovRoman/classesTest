<?php
include_once('Tag.php');
class Input extends Tag
{
    public function __construct()
    {
        parent::__construct('input');
    }
    public function __toString()
    {
        return $this->open();
    }
    public function open()
    {
        $name = $this->getAttribute('name');
        if ($name){
            if(isset($_REQUEST[$name])){
                $value = $_REQUEST[$name];
                $this->setAttribute('value', $value);
            }
        }
        return parent::open();
    }
}
?>