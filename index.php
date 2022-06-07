<?php
require_once 'tag.php';

$img = new Tag('img', ['alt' => 'image']);

echo $img->open();

$header = new Tag('header');

echo $header->open().'header сайта'.$header->close();
?>