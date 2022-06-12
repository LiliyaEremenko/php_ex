<?php
require_once 'tag.php';
require_once 'form.php';
require_once 'input.php';
require_once 'submit.php';
require_once 'password.php';
require_once 'hidden.php';
require_once 'textarea.php';

$form = (new Form)->setAttrs(['method' => 'GET']);

echo $form->open();
echo (new Textarea)->setAttr('name', 'message');
echo new Submit;
echo $form->close();
?>