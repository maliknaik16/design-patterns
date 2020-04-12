<?php

/**
 * @file
 * Contains DesignPattern\Decorator\PlainText
 */

namespace DesignPattern\Decorator;

/**
 * A PlainText class.
 */
class PlainText extends InputFormat
{
    /**
     * {@inheritdoc}
     */
    public function formatText(string $text) : string
    {
        return $text;
    }

}
