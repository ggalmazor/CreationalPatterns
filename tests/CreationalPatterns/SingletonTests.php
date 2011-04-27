<?php

use Singleton\Mother;

class SingletonTests extends PHPUnit_Framework_TestCase {

  public function testShouldAlwaysReturnTheSameInstance() {
    $this->assertEquals(Mother::getInstance(), Mother::getInstance(), '"Mother, there is no other" - Mr.T');
  }

}