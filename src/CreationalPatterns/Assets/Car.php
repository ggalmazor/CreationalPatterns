<?php

namespace Assets;

class Car {

  public $uid;
  public $driver = '';

  public function __construct() {
    $this->uid = sha1(uniqid());
  }
  
  public function isEmpty() {
    return $this->driver == null;
  }

}