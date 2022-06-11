<?php
require_once 'tag.php';
require_once 'link.php';

echo (new Link())->setText('first page')->setAttr('href', '1.php')->show();
echo '<br>';
echo (new Link())->setText('second page')->setAttr('href', '2.php')->show();
echo '<br>';
echo (new Link())->setText('third page')->setAttr('href', '3.php')->show();
echo '<br>';
echo (new Link())->setText('fourth page')->setAttr('href', '4.php')->show();
echo '<br>';
echo (new Link())->setText('fifth page')->setAttr('href', '5.php')->show();
?>