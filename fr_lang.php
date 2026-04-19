<?php
echo getcwd() . "\n";
$dir = "./";
$files = scandir($dir);
print_r($files);?>
