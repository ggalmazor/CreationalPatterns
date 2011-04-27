<?php

namespace Prototype;

use Prototype\DieImplementation;

class DiePrototype {

  private $specimen;

  public function __construct(DieImplementation $specimen) {
    $this->specimen = $specimen;
  }

  public function makeCopy() {
    return clone $this->specimen;
  }

}