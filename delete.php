<?php
$path = 'data/';
$fname = $_POST['fname'].'.txt';
$stream = $path. $fname;

$file = fopen($stream,'r');
unlink($stream);
fclose($file);
?>