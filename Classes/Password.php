<?php
include_once('Input.php');
class Password extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'password');
        parent::__construct();
    }
}
?>