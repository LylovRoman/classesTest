<?php
include_once('Tag.php');
class HtmlList extends Tag
{
    public $items = [];

    public function __toString(){
        return $this->show();
    }
    public function addItem($li){
        $this->items[] = $li;
        return $this;
    }
    public function show(){
        $result = $this->open();
        foreach ($this->items as $item) {
            $result .= $item;
        }
        $result .= $this->close();

        return $result;
    }
}
?>