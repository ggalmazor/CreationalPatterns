<?php

namespace Prototype;

abstract class ClonableDado {

  private $sides;

  public function factory($sides) {
    $this->sides = $sides;
  }

  public function getSides() {
    return $this->sides;
  }

}