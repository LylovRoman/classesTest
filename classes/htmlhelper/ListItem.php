<?php

namespace Classes\Htmlhelper;

include_once('Tag.php');

class ListItem extends Tag
{
    public function __construct()
    {
        parent::__construct('li');
    }

    public function __toString()
    {
        return $this->show();
    }
}

?>