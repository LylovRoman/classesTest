<?php
interface iTag
{
    // Геттер имени:
    public function getName();

    // Геттер текста:
    public function getText();

    // Геттер всех атрибутов:
    public function getAttributes();

    // Геттер одного атрибута по имени:
    public function getAttribute($name);

    // Открывающий тег, текст и закрывающий тег:
    public function show();

    // Открывающий тег:
    public function open();

    // Закрывающий тег:
    public function close();

    // Установка текста:
    public function setText($text);

    // Установка атрибута:
    public function setAttribute($name, $value);

    // Установка атрибутов:
    public function setAttributes($attrs);

    // Удаление атрибута:
    public function removeAttribute($name);

    // Установка класса:
    public function addClass($className);

    // Удаление класса:
    public function removeClass($className);
}
?>