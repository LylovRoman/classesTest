<?php
namespace Classes\File;

class FileManipulator
{
    public function create($filePath)
    {
        file_put_contents($filePath, '');
        return $this;
    }

    public function delete($filePath)
    {
        unlink($filePath);
        return $this;
    }

    public function copy($filePath, $copyPath)
    {
        copy($filePath, $copyPath);
        return $this;
    }

    public function rename($filePath, $newName)
    {
        rename($filePath, dirname($filePath) . '\\' . $newName);
        return $this;
    }

    public function replace($filePath, $newPath)
    {
        rename($filePath, $newPath);
        return $this;
    }

    public function weigh($filePath)
    {
        return filesize($filePath);
    }
}
?>