<?php

namespace Assets;

use Assets\Owner;

class LinuxOwner implements Owner {

  public function getName() {
    return "Linus";
  }

}