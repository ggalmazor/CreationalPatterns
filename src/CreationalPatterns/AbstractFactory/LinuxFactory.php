<?php

namespace AbstractFactory;

use AbstractFactory\OSFactory;
use Assets\LinuxOwner;

class LinuxFactory implements OSFactory {

  public function createOwner() {
    return new LinuxOwner;
  }

}