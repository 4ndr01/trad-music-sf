<?php

namespace Dev8\Media;


use Dev8\Renderable;

abstract class Media implements Renderable
{
    private string $url;


    public function getUrl(): string
    {
        return $this->url;
    }


    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function __construct(string $url)
    {
        $this->setUrl($url);

    }
    public function render(): void
    {
        echo $this->getHtml();
    }

}
