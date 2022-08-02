<?php

namespace Classes\Htmlhelper;

include_once('Tag.php');

class Textarea extends Tag
{
    public function __construct()
    {
        parent::__construct('textarea');
    }

    public function __toString()
    {
        return $this->show();
    }

    public function open()
    {
        $name = $this->getAttribute('name');
        if (isset($_REQUEST[$name])) {
            $value = $_REQUEST[$name];
            $this->setText($value);
        }

        return parent::open();
    }
}

?>