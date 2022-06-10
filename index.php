<?php
require_once 'tag.php';

	// Выведет <input class="eee">:
	echo (new Tag('input'))->addClass('eee')->open();

    // Выведет <input class="eee bbb">:
	echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open();

    // Выведет <input class="eee bbb kkk">:
	echo (new Tag('input'))
    ->setAttr('class', 'eee bbb')
    ->addClass('kkk')->open();

    // Выведет <input class="eee bbb">:
	echo (new Tag('input'))
    ->setAttr('class', 'eee bbb')
    ->addClass('eee') // такой класс уже есть и не добавится
    ->open();

    // Выведет <input class="eee bbb">:
	echo (new Tag('input'))
    ->addClass('eee')
    ->addClass('bbb')
    ->addClass('eee') // такой класс уже есть и не добавится
    ->open();
?>