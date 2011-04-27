<?php

namespace Builder;

class Cook {

  private $pizzaBuilder;

  public function setPizzaBuilder(PizzaBuilder $pizzaBuilder) {
    $this->pizzaBuilder = $pizzaBuilder;
    return $this;
  }

  public function getPizza() {
    $this->constructPizza();
    return $this->pizzaBuilder->getPizza();
  }
  
  private function constructPizza() {
    $this->pizzaBuilder->createNewPizzaProduct();
    $this->pizzaBuilder->buildDough();
    $this->pizzaBuilder->buildSauce();
    $this->pizzaBuilder->buildTopping();
    return $this;
  }

}