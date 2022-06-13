<?php
require_once 'tag.php';
require_once 'form.php';
require_once 'input.php';
require_once 'submit.php';
require_once 'hidden.php';
require_once 'select.php';

$form = (new Form)->setAttrs(['action' => ' ', 'method' => 'GET']);
$sel = 	new Select;
echo $form->open();
echo $sel->setAttr('name', 'list')
	->add( (new Option())->setText('item1') )
	->add( (new Option())->setText('item2') )
	->add( (new Option())->setText('item3') )
	->show();
echo new Submit;
	echo $form->close();
?>