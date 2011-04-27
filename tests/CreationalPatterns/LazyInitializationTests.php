<?php

use LazyInitialization\Fruit;

class LazyInitializationTests extends PHPUnit_Framework_TestCase {

  public function tearDown() {
    Fruit::reset();
  }

  public function testWhenAFruitIsCreatedTheTypeCountIncreasesOnce() {
    $this->assertEquals(0, Fruit::countTypes());
    $orange = Fruit::create('orange');
    $this->assertEquals('orange', $orange->getType());
    $this->assertEquals(1, Fruit::countTypes());
  }

  public function testWhenTwoFruitAreCreatedTheTypeCountIncreasesTwice() {
    $this->assertEquals(0, Fruit::countTypes());
    $orange = Fruit::create('orange');
    $apple = Fruit::create('apple');
    $this->assertEquals('orange', $orange->getType());
    $this->assertEquals('apple', $apple->getType());
    $this->assertEquals(2, Fruit::countTypes());
  }

  public function testWhenTwoSameFruitsAreCreatedTheTypeCountIncreasesOnce() {
    $this->assertEquals(0, Fruit::countTypes());
    $orange = Fruit::create('orange');
    $otherOrange = Fruit::create('orange');
    $this->assertEquals('orange', $orange->getType());
    $this->assertEquals('orange', $otherOrange->getType());
    $this->assertEquals(1, Fruit::countTypes());
  }

  public function testWhenTwoSameFruitsAreCreatedBothAreTheSameInstance() {
    $orange = Fruit::create('orange');
    $otherOrange = Fruit::create('orange');
    $this->assertEquals($orange, $otherOrange);
  }

}