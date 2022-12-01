<?php
namespace Dev8;

interface Renderable
{
    public function getHtml(): string;
    public function render(): void;

}