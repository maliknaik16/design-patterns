<?php

/**
 * @file
 * Contains DesignPattern\Prototype\BackReference
 */

namespace DesignPattern\Prototype;

/**
 * A BackReference class.
 */
class BackReference
{
    /**
     * The prototype object.
     *
     * @var \DesignPattern\Prototype\Prototype
     */
    public $prototype;

    /**
     * Initialize the object.
     *
     * @param DesignPattern\Prototype\Prototype $prototype
     */
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }

}
