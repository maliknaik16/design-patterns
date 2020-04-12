<?php

/**
 * @file
 * Contains DesignPattern\Decorator\PlainTextFilter
 */

namespace DesignPattern\Decorator;

/**
 * A PlainTextFilter decorator.
 */
class PlainTextFilter extends Filter
{

    /**
     * {@inheritdoc}
     */
    public function formatText(string $text) : string
    {
        $text = parent::formatText($text);

        return strip_tags($text);
    }

}
