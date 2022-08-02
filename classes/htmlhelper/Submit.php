<?php

namespace Classes\Htmlhelper;

include_once('Input.php');

class Submit extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'submit');
        return parent::__construct();
    }
}

?>