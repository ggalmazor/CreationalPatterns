<?php

namespace ObjectPool;

use Assets\Car;

class CarPool {

  private $cars = array();

  public function __construct($carCount) {
    for ($i = 0; $i < $carCount; $i++) {
      $car = new Car();
      $this->cars[$car->uid] = $car;
    }
  }

  public function claimCar($driver) {
    if (!$this->areFreeCars())
      throw new \Exception("There is no free car for $driver");
    $car = $this->getAFreeCar();
    $car->driver = $driver;
    return $car;
  }
  
  public function releaseCar(Car $car) {
    $car->driver = null;
    return $this;
  }
  
  public function areFreeCars() {
    return count($this->getFreeCars()) > 0;
  }

  private function getAFreeCar() {
    return array_pop($this->getFreeCars());
  }

  private function getFreeCars() {
    $freeCars = array_filter($this->cars, function($car) {
          return $car->isEmpty();
        });
    return $freeCars;
  }

}