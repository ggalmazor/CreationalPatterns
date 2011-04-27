<?php

namespace AbstractFactory;

use AbstractFactory\OSFactory;
use AbstractFactory\LinuxFactory;
use AbstractFactory\WindowsFactory;

class Application {

  public $owner;

  public function __construct($os) {
    $this->owner = self::createOSSpecificOwner($os)->createOwner();
  }

  public static function createOSSpecificOwner($os) {
    switch ($os) {
      case 'linux': return new LinuxFactory();
        break;
      case 'windows': return new WindowsFactory();
        break;
      default:
        throw new \Exception("$os not supported by ".__CLASS__);
    }
  }

}