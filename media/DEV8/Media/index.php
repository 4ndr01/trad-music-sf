<?php

require_once 'Media.php';
use Dev8\Media\Picture;
use Dev8\Media\Youtube;

$image = new Picture("https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png");
$image->setAlt("Google Logo");
$image->render();
$video = new Youtube("https://www.youtube.com/watch?v=9bZkp7q19f0");

