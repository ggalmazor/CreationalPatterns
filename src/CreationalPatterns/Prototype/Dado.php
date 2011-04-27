<?php

namespace Prototype;

use Prototype\ClonableDado;

// Dado is die in spanish, word which we can't use as it's reserved...
class Dado extends ClonableDado {

  public function __construct($sides) {
    $this->sides = $sides;
  }

}