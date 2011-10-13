<?php
include 'conf.php';
require_once('simpletest/autorun.php');


class TestTest extends UnitTestCase {
    function testCheckFalse() {
	$this->assertFalse(false);
    }

    function testCheckTrue() {
	$object = new Test();
	$this->assertFalse($object->getFalse());
    }

    function testGetOne() {
	$object = new Test();
	$this->assertEqual($object->getOne(), 1);
    }
}

class RTest extends UnitTestCase {
    function testGetOne() {
	$object = new R();
	$this->assertEqual($object->getOne(), 2);
    }
}
?>
