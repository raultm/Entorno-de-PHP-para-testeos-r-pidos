<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

function __autoload($class_name) {
    $filePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . strtolower($class_name) . '.php';
    if(file_exists($filePath))
	include $filePath;
    else
	echo "You're trying to use the '$class_name' Object. But I can't find the file : '$filePath'. <br />";
}

?>
