<?php

namespace Classes\Htmlhelper;

include_once('classes/Tag.php');

class Image extends Tag
{
    public function __construct()
    {
        $this->setAttribute('src', '');
        $this->setAttribute('alt', '');
        parent::__construct('img');
    }

    public function __toString()
    {
        return parent::open();
    }
}

?>