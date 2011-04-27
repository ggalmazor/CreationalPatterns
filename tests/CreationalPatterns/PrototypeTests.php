<?php

use Prototype\PrototypeCloner;
use Prototype\Dado;

class PrototypeTests extends PHPUnit_Framework_TestCase {

  public function testNewInstancesShouldBeObtainedByCopyingTheSpecimen() {
    $specimen = new Dado(0);
    $prototypeCloner = new PrototypeCloner($specimen);
    $sixSidedDie = $prototypeCloner->makeCopy();
    $sixSidedDie->factory(6);
    $this->assertEquals(6, $sixSidedDie->getSides());
    $this->assertNotEquals($sixSidedDie, $specimen);
  }

  public function testNewInstancesSouldBeDifferentBetweenThem() {
    $specimen = new Dado(0);
    $prototypeCloner = new PrototypeCloner($specimen);
    $sixSidedDie = $prototypeCloner->makeCopy();
    $sixSidedDie->factory(6);
    $nineSidedDie = $prototypeCloner->makeCopy();
    $nineSidedDie->factory(9);
    $this->assertEquals(9, $nineSidedDie->getSides());
    $this->assertNotEquals($sixSidedDie, $nineSidedDie);
  }

}