<?php

namespace AbstractFactory;

use AbstractFactory\OSFactory;
use Assets\WindowsOwner;

class WindowsFactory implements OSFactory {

  public function createOwner() {
    return new WindowsOwner;
  }

}