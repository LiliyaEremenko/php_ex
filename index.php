<?php
require_once 'tag.php';

echo (new Tag('input'))->setAttr('name', 'name1')->setAttr('value', 'text')->open();
echo (new Tag('input'))->setAttr('name', 'name2')->setAttr('value', 'empty')->open();
?>