<?php

namespace Singleton;

class Mother {

  private static $instance;

  public function getInstance() {
    if (self::$instance == null) {
      self::$instance = new self;
    }
    return self::$instance;
  }

}