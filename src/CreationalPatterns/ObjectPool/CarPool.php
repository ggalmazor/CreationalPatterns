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

  public function useCar($driver) {
    $car = $this->getAFreeCar();
    if (!($car instanceof Car)) {
      throw new \Exception("There is no free car for $driver");
    }
    $car->driver = $driver;
    return $car;
  }

  public function releaseCar(Car $car) {
    $car->driver = null;
    return $this;
  }

  private function getAFreeCar() {
    return array_pop($this->getFreeCars());
  }

  private function getFreeCars() {
    $freeCars = array_filter($this->cars, function($car) {
          return $car->driver == null;
        });
    return $freeCars;
  }

}