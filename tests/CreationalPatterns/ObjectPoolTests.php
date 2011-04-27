<?php

use ObjectPool\CarPool;

class ObjectPoolTests extends PHPUnit_Framework_TestCase {

  public function testShouldThrowExceptionIfAllInstancesAreInUse() {
    $this->setExpectedException('\Exception');
    $pool = new CarPool(2);
    $pool->useCar('peter');
    $pool->useCar('olivia');
    $pool->useCar('walter');
  }

  public function testObjectsShouldBeReusedAfterRelease() {
    $pool = new CarPool(2);
    $car = $pool->useCar('peter');
    $pool->useCar('olivia');
    $pool->releaseCar($car);
    $pool->useCar('walter');
  }

}