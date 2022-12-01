<?php
namespace Dev8\Media;
class Audio extends \Dev8\Media\Media
{
    use Autoplay;
    private bool $controls;


    public function isControls(): bool
    {
        return $this->controls;
    }


    public function setControls(bool $controls): void
    {
        $this->controls = $controls;
    }

    public function getHtml(): string
    {
        return "<audio src='{$this->getUrl()}' controls='{$this->isControls()}' autoplay='{$this->isAutoplay()}'></audio>";
    }
}