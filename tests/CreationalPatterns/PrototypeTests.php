<?php

use Prototype\DiePrototype;
use Prototype\DieImplementation;

class PrototypeTests extends PHPUnit_Framework_TestCase {

  public function testNewInstancesShouldBeObtainedByClonningASpecimen() {
    $specimen = new DieImplementation(0);
    $diePrototype = new DiePrototype($specimen);
    $sixSidedDie = $diePrototype->makeCopy();
    $sixSidedDie->factory(6);
    $this->assertEquals(6, $sixSidedDie->getSides());
    $this->assertNotEquals($sixSidedDie, $specimen);
  }

  public function testNewInstancesSouldBeDifferentBetweenThem() {
    $specimen = new DieImplementation(0);
    $diePrototype = new DiePrototype($specimen);
    $sixSidedDie = $diePrototype->makeCopy();
    $sixSidedDie->factory(6);
    $nineSidedDie = $diePrototype->makeCopy();
    $nineSidedDie->factory(9);
    $this->assertEquals(9, $nineSidedDie->getSides());
    $this->assertNotEquals($sixSidedDie, $nineSidedDie);
  }

}