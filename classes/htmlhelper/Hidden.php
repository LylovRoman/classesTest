<?php

namespace Classes\Htmlhelper;

include_once('Input.php');

class Hidden extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'hidden');
        parent::__construct();
    }
}

?>