<?php

namespace Classes\Htmlhelper;
include_once('Input.php');
class Checkbox extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'checkbox');
        $this->setAttribute('value', '1');
        parent::__construct();
    }
    public function open()
    {
        $name = $this->getAttribute('name');
        if ($name){
            if(isset($_REQUEST[$name])){
                $this->setAttribute('checked', true);
            }
        }
        return parent::open();
    }
}
?>