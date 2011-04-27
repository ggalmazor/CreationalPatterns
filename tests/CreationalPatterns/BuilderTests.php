<?php

use Builder\Cook;
use Builder\HawaiianPizzaBuilder;
use Builder\SpicyPizzaBuilder;

class BuilderTests extends PHPUnit_Framework_TestCase {

  public $cook;

  public function setUp() {
    $this->cook = new Cook();
  }

  public function testHawaiianPizzaShouldHaveProperIngredients() {
    $pizza = $this->cook->setPizzaBuilder(new HawaiianPizzaBuilder())->constructPizza()->getPizza();
    $this->assertEquals('cross', $pizza->getDough());
    $this->assertEquals('mild', $pizza->getSauce());
    $this->assertEquals('ham+pineapple', $pizza->getTopping());
  }

  public function testSpicyPizzaShouldHaveProperIngredients() {
    $pizza = $this->cook->setPizzaBuilder(new SpicyPizzaBuilder())->constructPizza()->getPizza();
    $this->assertEquals('pan baked', $pizza->getDough());
    $this->assertEquals('hot', $pizza->getSauce());
    $this->assertEquals('pepperoni+salami', $pizza->getTopping());
  }

}