<?php
require_once 'date.php';
require_once 'interval.php';
require_once 'file.php';

$date = new Date('2022-06-06');

echo $date->getDay().'<br>';

echo $date->getMonth('en').'<br>';
echo $date->getMonth('ru').'<br>';
echo $date->getMonth().'<br>';

echo $date->getYear().'<br>';

echo $date->getWeekDay('en').'<br>';
echo $date->getWeekDay('ru').'<br>';
echo $date->getWeekDay().'<br>';

echo $date->addDay(7).'<br>';
echo $date->subDay(7).'<br>';

echo $date->addMonth(1).'<br>';
echo $date->subMonth(1).'<br>';

echo $date->addYear(1).'<br>';
echo $date->subYear(1).'<br>';

echo $date->format('n.d.y').'<br>';
echo $date->__toString().'<br>';

echo '<br>';

$date1 = new Date('2022-06-06');
$date2 = new Date('2027-07-07');
	
$interval = new Interval($date1, $date2);
	
echo $interval->toDays().'<br>';
echo $interval->toMonths().'<br>';
echo $interval->toYears().'<br>';

echo $interval->__toString().'<br>';

echo '<br>';

$file = new File('C:\OpenServer\domains\localhost\aaaa\forclassfile.txt');

echo $file->getPath().'<br>';
echo $file->getDir().'<br>';
echo $file->getName().'<br>';
echo $file->getExt().'<br>';
echo $file->getSize().'<br>';

echo $file->getText().'<br>';
$file->setText('master of music').'<br>';
$file->appendText(' meow meow meow').'<br>';
$file->copy('copyforfile.txt').'<br>';
?>