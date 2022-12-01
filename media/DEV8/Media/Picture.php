<?php
namespace Dev8\Media;
class Picture extends Media

{

    private string $alt;


    public function getAlt(): string
    {
        return $this->alt;
    }


    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }

    public function count(): int
    {
       return 5;
    }

    public function getHtml(): string
    {
        return "<img src='{$this->getUrl()}' alt='{$this->getAlt()}'>";
    }


}