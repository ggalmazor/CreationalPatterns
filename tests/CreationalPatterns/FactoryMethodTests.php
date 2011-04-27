<?php

use FactoryMethod\OSOwnerFactory;

class FactoryMethodTests extends PHPUnit_Framework_TestCase {

  public function testLinuxOwnerShouldBeLinus() {
    $owner = OSOwnerFactory::create('Linux');
    $this->assertEquals('Linus', $owner->getName());
  }

  public function testWindowsOwnerShouldBeBill() {
    $owner = OSOwnerFactory::create('Windows');
    $this->assertEquals('Bill', $owner->getName());
  }

  public function testUnsupportedOSShouldThrowException() {
    $this->setExpectedException('\Exception');
    $owner = OSOwnerFactory::create('Osx');
  }

}