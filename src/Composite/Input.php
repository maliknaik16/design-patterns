<?php

/**
 * @file
 * Contains DesignPattern\Composite\Input
 */

namespace DesignPattern\Composite;

/**
 * A Input class.
 */
class Input extends FormElement
{
    /**
     * The type of the input element.
     *
     * @var string
     */
    private $type;

    /**
     * Initialize the input element.
     *
     * @param string $name
     * @param string $title
     * @param string $type
     */
    public function __construct(string $name, string $title, string $type)
    {
        parent::__construct($name, $title);
        $this->type = $type;
    }

    /**
     * Renders the form element.
     *
     * @return string
     */
    public function render() : string
    {
        return "<label for=\"{$this->name}\">{$this->title}</label>\n<input type=\"{$this->type}\" name=\"{$this->name}\" value=\"{$this->data}\"/>\n";
    }
}
