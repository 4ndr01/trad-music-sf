<?php

namespace Dev8\Media;

trait Autoplay
{
    private bool $autoplay;

    public function isAutoplay(): bool
    {
        return $this->autoplay;
    }


    public function setAutoplay(bool $autoplay): void
    {
        $this->autoplay = $autoplay;
    }

}