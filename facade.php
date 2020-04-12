<?php

require_once 'vendor/autoload.php';

use DesignPattern\Facade\Facade;

// Initialize the facade.
$facade = new Facade;

// Print the results of the facade operations.
print $facade->operation();

// Outputs:
//
// Facade initializes the subsystems.
// Subsytem1: Performing operations on subsystem.
// Subsytem2: Finishing up the operations.
