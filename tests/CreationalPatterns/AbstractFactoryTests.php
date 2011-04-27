<?php

use AbstractFactory\Application;

class AbstractFactoryTests extends PHPUnit_Framework_TestCase {

  public function testLinuxOwnerShouldBeLinus() {
    $app = new Application('linux');
    $this->assertEquals('Linus', $app->owner->getName());
  }

  public function testWindowsOwnerShouldBeBill() {
    $app = new Application('windows');
    $this->assertEquals('Bill', $app->owner->getName());
  }

  public function testUnsupportedOSShouldThrowException() {
    $this->setExpectedException('\Exception');
    $app = new Application('osx');
  }

}

