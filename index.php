<?php
require_once 'tag.php';
require_once 'form.php';
require_once 'input.php';
require_once 'submit.php';
require_once 'hidden.php';
require_once 'checkbox.php';
require_once 'radio.php';

$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

echo $form->open();
echo (new Radio)->setAttr('name', 'check');
echo (new Radio)->setAttr('name', 'check');
echo (new Input)->setAttr('name', 'login');
echo new Submit;
echo $form->close();
?>