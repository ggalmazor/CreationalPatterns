<?php

namespace Prototype;

class DieImplementation {

  private $sides;

  public function __construct($sides) {
    $this->sides = $sides;
  }

  public function factory($sides) {
    $this->sides = $sides;
  }

  public function getSides() {
    return $this->sides;
  }

}