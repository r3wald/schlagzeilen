<?php

namespace Application;

class Storage
{
    private $dir;
    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    public function save($entry)
    {
        $entry .= PHP_EOL;
        file_put_contents($this->dir . '/headlines.txt', $entry, FILE_APPEND);
    }

    public function getList()
    {
        $content = file_get_contents($this->dir . '/headlines.txt');
        $result = explode(PHP_EOL, $content);
        return $result;
    }
}
