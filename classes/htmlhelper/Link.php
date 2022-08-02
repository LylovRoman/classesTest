<?php

namespace Classes\Htmlhelper;

include_once('Tag.php');

class Link extends Tag
{
    const ACTIVE = 'active';
    private $src;
    private $alt;

    public function __construct()
    {
        $this->setAttribute('href', '');
        parent::__construct('a');
    }

    public function __toString()
    {
        return parent::show();
    }

    public function activateSelf()
    {
        if ($_SERVER['REQUEST_URI'] == $this->getAttribute('href')) {
            $this->addClass(self::ACTIVE);
        }
    }

    public function open()
    {
        $this->activateSelf();
        return parent::open();
    }
}

?>