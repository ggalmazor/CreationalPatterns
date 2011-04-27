<?php

namespace Prototype;

use Prototype\Prototipable;

class PrototypeCloner {

  private $prototype;

  public function __construct(ClonableDado $prototype) {
    $this->prototype = $prototype;
  }

  public function makeCopy() {
    return clone $this->prototype;
  }

}