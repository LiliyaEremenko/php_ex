<?php
require_once 'tag.php';
require_once 'form.php';
require_once 'input.php';
require_once 'submit.php';
require_once 'password.php';
require_once 'hidden.php';

$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

echo $form->open();
echo (new Input)->setAttr('name', 'login');
echo (new Hidden)->setAttr('name', 'pass')->setAttr('value', 'empty');
echo new Submit;
echo $form->close();
?>