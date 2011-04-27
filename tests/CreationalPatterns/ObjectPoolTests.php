<?php

use ObjectPool\CarPool;

class ObjectPoolTests extends PHPUnit_Framework_TestCase {

  public function testShouldThrowExceptionIfAllInstancesAreInUse() {
    $this->setExpectedException('\Exception');
    $pool = new CarPool(2);
    $pool->claimCar('peter');
    $pool->claimCar('olivia');
    $pool->claimCar('walter');
  }

  public function testObjectsShouldBeReusedAfterRelease() {
    $pool = new CarPool(2);
    $car = $pool->claimCar('peter');
    $pool->claimCar('olivia');
    $pool->releaseCar($car);
    $pool->claimCar('walter');
  }

}