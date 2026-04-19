<?php
echo getcwd() . "\n";
$dir = "./";
$files = scandir($dir);
echo $files;?>
