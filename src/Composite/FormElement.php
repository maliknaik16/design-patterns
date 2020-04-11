<?php

/**
 * @file
 * Contains DesignPattern\Composite\FormElement
 */

namespace DesignPattern\Composite;

/**
 * A FormElement class.
 */
abstract class FormElement
{

    /**
     * The value for the name attribute.
     *
     * @var string
     */
    protected $name;

    /**
     * The value for the title attribute.
     *
     * @var string
     */
    protected $title;

    /**
     * The data value for the value attribute of the form element.
     *
     * @var mixed
     */
    protected $data;

    /**
     * Initialize the Form element.
     *
     * @param string $name
     * @param string $title
     */
    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    /**
     * Return the name of the form element.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set the data of the form element.
     *
     * @return void
     */
    public function setData($data) : void
    {
        $this->data = $data;
    }

    /**
     * Returns the data of the form element.
     *
     * @return string
     */
    public function getData() : array
    {
        return $this->data;
    }

    /**
     * Renders the form element.
     *
     * @return string
     */
    abstract public function render() : string;
}
