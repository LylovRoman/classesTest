<?php
include_once('Input.php');
class Radio extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'radio');
        parent::__construct();
    }
    public function open()
    {
        $name = $this->getAttribute('name');
        if ($name){
            if($_REQUEST[$name] == $this->getAttribute('value')){
                $this->setAttribute('checked', true);
            }
        }
        return Tag::open();
    }
}
?>