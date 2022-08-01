<?php
include_once('Interfaces/iFile.php');
class File implements iFile
{
    private $filePath;

    public function __construct($filePath){
        $this->filePath = $filePath;
    }
    public function getPath(){
        return $this->filePath;
    }
    public function getDir(){
        return dirname($this->filePath);
    }

    public function getName(){
        return basename($this->filePath);
    }
    public function getExt(){
        $result = pathinfo($this->filePath);
        return $result['extension'];
    }
    public function getSize(){
        return  filesize($this->filePath);
    }
    public function getText(){
        return file_get_contents($this->filePath);
    }
    public function setText($text){
        file_put_contents($this->filePath, $text);
    }
    public function appendText($text){
        file_put_contents($this->filePath, file_get_contents($this->filePath) . $text);
    }
    public function copy($copyPath){
        copy($this->filePath, $copyPath);
    }
    public function delete(){
        unlink($this->filePath);
    }
    public function rename($newName){
        $newPath = dirname($this->filePath) . '\\' . $newName;
        rename($this->filePath, $newPath);
        $this->filePath = $newPath;
    }
    public function replace($newPath){
        rename($this->filePath, $newPath);
        $this->filePath = $newPath;
    }
}
?>