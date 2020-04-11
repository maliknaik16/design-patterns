<?php

/**
 * @file
 * Contains DesignPattern\Builder\Builder
 */

namespace DesignPattern\Builder;

/**
 * A Builder interface.
 */
interface Builder
{
    /**
     * Adds wheel to the vehicle.
     *
     * @return Builder
     */
    public function addWheels() : Builder;

    /**
     * Adds engine to the vehicle.
     *
     * @return Builder
     */
    public function addEngine() : Builder;

    /**
     * Adds doors to the vehicle.
     *
     * @return Builder
     */
    public function addDoors() : Builder;

    /**
     * Returns the vehicle.
     *
     * @return Vehicle
     */
    public function getVehicle() : Vehicle;

    /**
     * Adds wheels to the vehicle.
     *
     * @return Builder
     */
    public function createVehicle() : Builder;
}
