<?php

namespace Classes\Htmlhelper;

include_once('HtmlList.php');

class Ul extends HtmlList
{
    public function __construct()
    {
        parent::__construct('Ul');
    }
}

?>