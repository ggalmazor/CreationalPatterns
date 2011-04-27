<?php

namespace LazyInitialization;

class Fruit {

  private $type;
  private static $types = array();

  private function __construct($type) {
    $this->type = $type;
  }

  public function create($type) {
    if (!isset(self::$types[$type])) {
      self::$types[$type] = new Fruit($type);
    }
    return self::$types[$type];
  }

  public function getType() {
    return $this->type;
  }

  public static function countTypes() {
    return count(self::$types);
  }

  public static function reset() {
    self::$types = array();
  }

}