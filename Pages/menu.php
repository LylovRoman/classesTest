<?php

use Classes\Htmlhelper\Link;

require_once $_SERVER['DOCUMENT_ROOT'] . "/classes/Link.php";

for ($i = 1; $i < 6; $i++){
    echo (new Link())->setText("$i")->setAttribute('href', "/Pages/$i.php") . '<br>';
}
?>