<?php

/**
 * @file
 * Contains DesignPattern\Facade\Facade
 */

namespace DesignPattern\Facade;

/**
 * A Facade class.
 */
class Facade
{

    /**
     * The first subsystem.
     *
     * @var DesignPattern\Facade\Subsystem1
     */
    protected $subsystem1;

    /**
     * The second subsystem.
     *
     * @var DesignPattern\Facade\Subsystem2
     */
    protected $subsystem2;

    /**
     * Initialize the Facade.
     *
     * @param DesignPattern\Facade\Subsystem1
     * @param DesignPattern\Facade\Subsystem2
     */
    public function __construct(Subsystem1 $subsystem1 = null, Subsystem2 $subsystem2 = null)
    {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1;
        $this->subsystem2 = $subsystem2 ?: new Subsystem2;
    }

    /**
     * Performs the operation on both the subsystems.
     *
     * @return string
     */
    public function operation() : string
    {
        $result = "Facade initializes the subsystems.\n";
        $result .= $this->subsystem1->operation();
        $result .= $this->subsystem2->operation();

        return $result;
    }
}
