<?php
require_once 'tag.php';
require_once 'image.php';

echo (new Image())->setAttrs(['src' => 'mafuyu.png', 'width' => '300px', 'height' => '200px']);
?>