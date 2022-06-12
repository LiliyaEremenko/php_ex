<?php
require_once 'tag.php';
require_once 'form.php';
require_once 'input.php';

$form = (new Form)->setAttrs(['action' => '', 
		'method' => 'GET']);
	
 	echo $form->open();
		echo (new Input)->setAttr('name', 'a');
		echo (new Input)->setAttr('name', 'b');
		echo (new Input)->setAttr('name', 'c');
		echo (new Input)->setAttr('name', 'd');
		echo (new Input)->setAttr('name', 'e');
		echo (new Input)->setAttr('type', 'submit');
	echo $form->close();
echo $sum;
?>