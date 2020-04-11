<?php

/**
 * @file
 * Contains DesignPattern\Builder\CarBuilder
 */

namespace DesignPattern\Builder;

/**
 * A CarBuilder class.
 */
class CarBuilder implements Builder
{
    /**
     * The car instance.
     *
     * @var DesignPattern\Builder\Car
     */
    private $car;

    /**
     * {@inheritdoc}
     */
    public function createVehicle() : Builder
    {
        $this->car = new Car;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addWheels() : Builder
    {
        for($i = 1; $i <= 4; $i++)
        {
            $this->car->setPart('wheel' . $i, new Wheel);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addEngine() : Builder
    {
        $this->car->setPart('carEngine', new Engine);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addDoors() : Builder
    {
        $this->car->setPart('rightDoor', new Door);
        $this->car->setPart('leftDoor', new Door);
        $this->car->setPart('trunk', new Door);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getVehicle() : Vehicle
    {
        return $this->car;
    }

}
