<?php

/**
 * @file
 * Contains DesignPattern\Decorator\InputFormat
 */

namespace DesignPattern\Decorator;

/**
 * An InputFormat interface.
 */
abstract class InputFormat
{
    /**
     * Returns the formatted text.
     *
     * @param string $text
     *
     * @return string
     */
    abstract public function formatText(string $text) : string;

}
