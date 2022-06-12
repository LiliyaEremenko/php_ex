<?php
require_once 'tag.php';
require_once 'image.php';
require_once 'link.php';
require_once 'htmlList.php';

$list = new HtmlList('ul');
	
	echo $list
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'));

$ul = new Ul;
$ol = new Ol;

echo $ul
	->addItem((new ListItem())->setText('one'))
	->addItem((new ListItem())->setText('two'));

echo $ol
	->addItem((new ListItem())->setText('one'))
	->addItem((new ListItem())->setText('two'));
?>