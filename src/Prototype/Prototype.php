<?php

/**
 * @file
 * Contains DesignPattern\Prototype\Prototype
 */

namespace DesignPattern\Prototype;

/**
 * A Prototype class.
 *
 * @link https://refactoring.guru/design-patterns/prototype/php/example
 */
class Prototype
{
    /**
     * The variable.
     *
     * @var int
     */
    public $intVariable;

    /**
     * The date time object.
     *
     * @var \DateTime
     */
    public $dateTime;

    /**
     * The circular reference object.
     *
     * @var \DesignPattern\Prototype\BackReference
     */
    public $circularReference;

    /**
     * The fields of primitive types are automatically cloned whereas the fields
     * containing the object reference needs to be cloned manually. If the
     * object reference contain back references to the current class then
     * the object should point to the cloned object after the cloning is complete.
     */
    public function __clone()
    {
        $this->dateTime = clone $this->dateTime;

        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }

}
