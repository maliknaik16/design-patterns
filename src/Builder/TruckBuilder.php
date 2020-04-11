<?php

/**
 * @file
 * Contains DesignPattern\Builder\TruckBuilder
 */

namespace DesignPattern\Builder;

/**
 * A TruckBuilder class.
 */
class TruckBuilder implements Builder
{
    /**
     * The truck instance.
     *
     * @var DesignPattern\Builder\Truck
     */
    private $truck;

    /**
     * {@inheritdoc}
     */
    public function createVehicle() : Builder
    {
        $this->truck = new Truck;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addWheels() : Builder
    {
        for($i = 1; $i <= 6; $i++)
        {
            $this->truck->setPart('wheel' . $i, new Wheel);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addEngine() : Builder
    {
        $this->truck->setPart('truckEngine', new Engine);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addDoors() : Builder
    {
        $this->truck->setPart('rightDoor', new Door);
        $this->truck->setPart('leftDoor', new Door);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getVehicle() : Vehicle
    {
        return $this->truck;
    }

}
