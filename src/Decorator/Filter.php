<?php

/**
 * @file
 * Contains DesignPattern\Decorator\Filter
 */

namespace DesignPattern\Decorator;

/**
 * A Filter decorator.
 */
class Filter extends InputFormat
{
    /**
     * The formatted text object.
     *
     * @var DesignPattern\Decorator\InputFormat
     */
    protected $format;

    /**
     */
    public function __construct(InputFormat $format)
    {
        $this->format = $format;
    }

    /**
     * {@inheritdoc}
     */
    public function formatText(string $text) : string
    {
        return $this->format->formatText($text);
    }

}
