<?php

namespace Classes\Htmlhelper;

include_once('HtmlList.php');

class Select extends HtmlList
{
    public function __construct()
    {
        parent::__construct('select');
    }

    public function open()
    {
        $name = $this->getAttribute('name');
        if ($name) {
            if (isset($_REQUEST[$name])) {
                $value = $_REQUEST[$name];
                foreach ($this->items as $item) {
                    if ($item->getAttribute('value') == $value) {
                        $item->setSelected();
                    }
                }
            }
        }
        return parent::open();
    }
}

?>