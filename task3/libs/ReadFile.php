<?php

class ReadFile
{
    private $filetext;
    private $line;
    private $sumboll;

    public function getText()
    {
        return $this->filetext;
    }

    public function setText($filetext)
    {
        $this->filetext = $filetext;
    }

    public function getLine()
    {
        return $this->line;
    }
    public function setLine($line)
    {
         $this->line = $line;
    }

    public function readFileString($fileName)
    {
        if (fopen($fileName, "r") !== false)
        {
            $handle = fopen($fileName, "r");
        }
        else
        {
            return  EROOR_OPEN;
        }
        while (($this->line = fgets($handle)) )
        {
            if($this->line !== null)
            {
                $this->filetext.= $this->line;
            } else
            {
                return  EROOR_READ;
            }
        }
        fclose($handle);
        $this->filetext = explode(PHP_EOL, $this->filetext);
        return $this->filetext;
    }

    public function readFileSumbol($fileName)
    {
        if (fopen($fileName, "r") !== false)
        {
            $handle = fopen($fileName, "r");
        }
        else
        {
            return  EROOR_OPEN;
        }
        while (false !== ($this->line = fgetc($handle))) {
            $this->sumboll  .= $this->line ."\n";
        }
        fclose($handle);
        return $this->sumboll;
    }

    public function replaceText($fileName)
    {
        if (fopen($fileName, "r") !== false)
        {
            $handle = fopen($fileName, "r");
        }
        else
        {
            return  EROOR_OPEN;
        }
        /**

        $file = 'people.txt';
        // Открываем файл для получения существующего содержимого
        $current = file_get_contents($file);
        // Добавляем нового человека в файл
        $current .= "John Smith\n";
        // Пишем содержимое обратно в файл
        file_put_contents($file, $current);
         *
         *
         *    function file_force_contents($dir, $contents){
        $parts = explode('/', $dir);
        $file = array_pop($parts);
        $dir = '';
        foreach($parts as $part)
        if(!is_dir($dir .= "/$part")) mkdir($dir);
        file_put_contents("$dir/$file", $contents);
        }
         *

        $user = "test";
        $pass = "myFTP";
        $host = "example.com";
        $file = "test.txt";
        $hostname = $user . ":" . $pass . "@" . $host . "/" . $file;


        $content = "this is just a test.";


        $options = array('ftp' => array('overwrite' => true));
        $stream = stream_context_create($options);


        file_put_contents($hostname, $content, 0, $stream);
        */

    }
}

