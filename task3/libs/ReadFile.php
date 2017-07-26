<?php

class ReadFile
{
    private $filename;

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     *   $filename = 'name.txt';
    $handle = fopen($filename, "rb");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    echo $contents;
     */

    public function __construct()
    {
    }


    public function readFileString()
    {
        $file = fopen( $fileNam ,"r");

    }

    public function readFileSumbol()
    {

    }
}