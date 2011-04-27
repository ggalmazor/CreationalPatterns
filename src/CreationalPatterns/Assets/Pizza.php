<?php

namespace Assets;

class Pizza {

  private $dough = '';
  private $sauce = '';
  private $topping = '';

  public function getDough() {
    return $this->dough;
  }

  public function setDough($dough) {
    $this->dough = $dough;
    return $this;
  }

  public function getSauce() {
    return $this->sauce;
  }

  public function setSauce($sauce) {
    $this->sauce = $sauce;
    return $this;
  }

  public function getTopping() {
    return $this->topping;
  }

  public function setTopping($topping) {
    $this->topping = $topping;
    return $this;
  }

}