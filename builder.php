<?php

/**
 * @see https://designpatternsphp.readthedocs.io/en/latest/Creational/Builder/README.html
 */

require_once 'vendor/autoload.php';

use DesignPattern\Builder\Director;

use DesignPattern\Builder\TruckBuilder;
use DesignPattern\Builder\CarBuilder;

use DesignPattern\Builder\Car;
use DesignPattern\Builder\Truck;

/**
 * @var DesignPattern\Builder\Director
 */
$director = new Director;

/**
 * Creates the truck using the Truck builder and Director.
 *
 * @param DesignPattern\Builder\Director $director
 *
 * @return void
 */
function createTruck(Director $director) : void
{
    $truck = new TruckBuilder;

    if ($director->build($truck) instanceof Truck) {
        print "A Truck is built using the Builder design pattern.\n";
    }
}

/**
 * Creates the car using the Car builder and Director.
 *
 * @param DesignPattern\Builder\Director $director
 *
 * @return void
 */
function createCar(Director $director) : void
{
    $car = new CarBuilder;

    if ($director->build($car) instanceof Car) {
        print "A Car is built using the Builder design pattern.\n";
    }
}

createTruck($director);
createCar($director);

// Outputs:
//
// A Truck is built using the Builder design pattern.
// A Car is built using the Builder design pattern.
