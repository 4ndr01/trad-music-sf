<?php
namespace Dev8\Media;
abstract class video extends \Dev8\Media\Media
{
    use Autoplay;

    private int $frameborder;
    private bool $allowfullscreen;





    public function getFrameborder(): int
    {
        return $this->frameborder;
    }


    public function setFrameborder(int $frameborder): void
    {
        $this->frameborder = $frameborder;
    }


    public function isAllowfullscreen(): bool
    {
        return $this->allowfullscreen;
    }


    public function setAllowfullscreen(bool $allowfullscreen): void
    {
        $this->allowfullscreen = $allowfullscreen;
    }




}