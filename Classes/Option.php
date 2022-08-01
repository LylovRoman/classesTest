<?php
include_once('Tag.php');
class Option extends Tag
{
    public function __construct()
    {
        parent::__construct('option');
    }
    public function __toString(){
        return $this->show();
    }
    public function setSelected(){
        $this->setAttribute('selected', true);
        return $this;
    }
}
?>