<?php

namespace Application;

class Generator
{
    private $dir;
    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    public function generate()
    {
        $part1 = $this->getPart1();
        $part2 = $this->getPart2();
        $part3 = $this->getPart3();
        $part4 = $this->getPart4();
        $part5 = $this->getPart5();
        $result = sprintf("%s %s-%s %s %s", $part1, $part2, $part3, $part4, $part5);
        return $result;
    }

    private function getPart1()
    {
        $content = file_get_contents($this->dir . '/0.txt');
        $lines = explode("\n", $content);
        shuffle($lines);
        $result = array_pop($lines);
        return $result;
    }

    private function getPart2()
    {
        $content = file_get_contents($this->dir . '/1.txt');
        $lines = explode("\n", $content);
        shuffle($lines);
        $result = array_pop($lines);
        return $result;
    }

    private function getPart3()
    {
        $content = file_get_contents($this->dir . '/2.txt');
        $lines = explode("\n", $content);
        shuffle($lines);
        $result = array_pop($lines);
        return $result;
    }

    private function getPart4()
    {
        $content = file_get_contents($this->dir . '/3.txt');
        $lines = explode("\n", $content);
        shuffle($lines);
        $result = array_pop($lines);
        return $result;
    }

    private function getPart5()
    {
        $content = file_get_contents($this->dir . '/4.txt');
        $lines = explode("\n", $content);
        shuffle($lines);
        $result = array_pop($lines);
        return $result;
    }
}
