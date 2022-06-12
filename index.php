<?php
require_once 'tag.php';
require_once 'form.php';
require_once 'input.php';
require_once 'submit.php';

$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

echo $form->open();
echo (new Input)->setAttr('name', 'first');
echo new Submit;
echo $form->close();
?>