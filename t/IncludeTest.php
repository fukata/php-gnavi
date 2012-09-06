<?php

require_once "PHPUnit/Autoload.php";

class IncludeTest extends PHPUnit_Framework_TestCase {
    public function testLoad() {
        require_once 'gnavi/Gnavi.php';
    }
}
