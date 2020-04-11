<?php

/**
 * @file
 * Contains DesignPattern\Builder\Vehicle
 */

namespace DesignPattern\Builder;

/**
 * An abstract Vehicle class.
 */
abstract class Vehicle
{
    /**
     * The vehicle objects.
     *
     * @var object[]
     */
    private $parts;

    /**
     * Adds a new part to the vehicle.
     *
     * @return void
     */
    public function setPart(string $name, object $object) : void
    {
        $this->parts[$name] = $object;
    }

}
