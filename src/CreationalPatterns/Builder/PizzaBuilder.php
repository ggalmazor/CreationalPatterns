<?php

namespace Builder;

use Assets\Pizza;

abstract class PizzaBuilder {

  protected $pizza;

  public function getPizza() {
    return $this->pizza;
  }

  public function createNewPizzaProduct() {
    $this->pizza = new Pizza();
  }

  public abstract function buildDough();

  public abstract function buildSauce();

  public abstract function buildTopping();
}