<?php

/**
 * @file
 * Contains DesignPattern\Builder\Director
 */

namespace DesignPattern\Builder;

/**
 * A Director class.
 */
class Director
{
    /**
     * Builds and returns the vehicle.
     *
     * @param Builder $builder
     *
     * @return Vehicle
     */
    public function build(Builder $builder) : Vehicle
    {
        return $builder->createVehicle()
                       ->addEngine()
                       ->addDoors()
                       ->addWheels()
                       ->getVehicle();
    }
}
