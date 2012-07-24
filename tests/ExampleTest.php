<?php
include ('src/Example.php');

class ExampleTest extends PHPUnit_Framework_TestCase {
    public function testExampleIsAGoodClass() {
        $e = new Example();
        $this->assertFalse($e->isAGoodClass());
    }
}
