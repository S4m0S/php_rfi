<?php
echo getcwd() . "\n";
$dir = "./";
$files = scandir($dir);
print_r($files);
print_r(file("index.php"));?>
