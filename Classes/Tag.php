<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Interfaces/iTag.php";
class Tag implements iTag
{
    private $name;
    private $attributes;
    private $text = '';

    public function show()
    {
        return $this->open() . $this->text . $this->close();
    }
    public function getText()
    {
        return $this->text;
    }
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }
    public function __construct($name){
        $this->name = $name;
    }
    public function open(){
        $name = $this->name;
        $attr = $this->getAttributes();
        return "<$name$attr>";
    }
    public function close(){
        return "</$this->name>";
    }
    public function getName(){
        return $this->name;
    }
    public function getAttributes(){
        $attr = $this->attributes;
        $result = '';
        if (!empty($attr)){
            foreach ($attr as $key => $value){
                if ($value === true){
                    $result .= " $key";
                } else {
                    $result .= " $key=\"$value\"";
                }
            }
        }
        return $result;
    }
    public function removeAttribute($attr){
        unset($this->attributes[$attr]);
        return $this;
    }
    public function getAttribute($key){
        if (!empty($this->attributes[$key])){
            return $this->attributes[$key];
        } else {
            return null;
        }
    }
    public function setAttribute($key, $value){
        $this->attributes[$key] = $value;
        return $this;
    }
    public function setAttributes($arr){
        foreach ($arr as $key => $value){
            $this->setAttribute($key, $value);
        }
        return $this;
    }
    public function addClass($className){
        if (!isset($this->attributes['class'])){
            $this->attributes['class'] = $className;
        } else {
            $classes = explode(' ', $this->attributes['class']);
            if (!in_array($className, $classes)){
                $this->attributes['class'] .= ' ' . $className;
            }
        }
        return $this;
    }
    public function removeItem($elem, $arr){
        $key = array_search($elem, $arr);
        array_splice($arr, $key, 1);
        return $arr;
    }
    public function removeClass($className){
        if (isset($this->attributes['class'])){
            $classes = explode(' ', $this->attributes['class']);
            if(in_array($className, $classes)){
                $classes = $this->removeItem($className , $classes);
                $this->attributes['class'] = implode(' ', $classes);
            }
        }
        return $this;
    }
}
?>