<?php

require 'src/CreationalPatterns/Assets/Owner.php';
require 'src/CreationalPatterns/Assets/WindowsOwner.php';
require 'src/CreationalPatterns/Assets/LinuxOwner.php';
require 'src/CreationalPatterns/Assets/Pizza.php';
require 'src/CreationalPatterns/Assets/Car.php';

require 'src/CreationalPatterns/AbstractFactory/Application.php';
require 'src/CreationalPatterns/AbstractFactory/OSFactory.php';
require 'src/CreationalPatterns/AbstractFactory/LinuxFactory.php';
require 'src/CreationalPatterns/AbstractFactory/WindowsFactory.php';

require 'src/CreationalPatterns/FactoryMethod/OSOwnerFactory.php';

require 'src/CreationalPatterns/Builder/Cook.php';
require 'src/CreationalPatterns/Builder/PizzaBuilder.php';
require 'src/CreationalPatterns/Builder/HawaiianPizzaBuilder.php';
require 'src/CreationalPatterns/Builder/SpicyPizzaBuilder.php';

require 'src/CreationalPatterns/LazyInitialization/Fruit.php';

require 'src/CreationalPatterns/ObjectPool/CarPool.php';

require 'src/CreationalPatterns/Prototype/DiePrototype.php';
require 'src/CreationalPatterns/Prototype/DieImplementation.php';

require 'src/CreationalPatterns/Singleton/Mother.php';