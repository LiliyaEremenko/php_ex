<?php
require_once 'tag.php';

$input = new Tag('input');

echo $input
    ->setAttr('value', 'test')
    ->setAttr('id', 'new')
    ->setAttr('class', 'eee')
    ->removeAttr('id')
    ->open();
?>