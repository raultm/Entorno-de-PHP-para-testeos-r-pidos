<?php
include 'conf.php';

$test = new Test();
if($test->getOne() == 1){
    echo "It works!";
}

?>
