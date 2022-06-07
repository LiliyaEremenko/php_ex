<?php
require_once 'tag.php';

$input = new Tag('input');

echo $input
    ->setAttr('value', 'test')
    ->setAttrs(['type' => 'submit', 'id' => 'new'])
    ->setAttr('disabled', 'true')
    ->open();
?>