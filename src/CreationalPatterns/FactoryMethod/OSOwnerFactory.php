<?php

namespace FactoryMethod;

use Assets\LinuxOwner;
use Assets\WindowsOwner;

class OSOwnerFactory {

  public function create($os) {
    $className = sprintf("Assets\%sOwner", $os);
    if (!class_exists($className)) {
      throw new \Exception("$os not supported by ".__CLASS__);
    }
    return new $className;
  }

}