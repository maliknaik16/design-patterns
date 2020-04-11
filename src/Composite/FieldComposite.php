<?php

/**
 * @file
 * Contains DesignPattern\Composite\FieldComposite
 */

namespace DesignPattern\Composite;

/**
 * A FieldComposite class.
 */
abstract class FieldComposite extends FormElement
{
    /**
     * An array of Form elements to render.
     *
     * @var FormElement[]
     */
    protected $fields = [];

    /**
     * Adds a new FormElement to the array.
     *
     * @var DesignPattern\Composite\FormElement
     *
     * @return void
     */
    public function add(FormElement $field) : void
    {
        $name = $field->getName();

        $this->fields[$name] = $field;
    }

    /**
     * Removes a FormElement from the fields array.
     *
     * @var DesignPattern\Composite\FormElement $component
     *
     * @return void
     */
    public function remove(FormElement $field) : void
    {
        $this->fields = array_filter($this->fields, function ($child) use ($field) {
            return $child != $field;
        });
    }

    /**
     * Sets the data on each field.
     *
     * @param array $data
     *
     * @return void
     */
    public function setData($data) : void
    {
        foreach ($this->fields as $name => $field) {
            if (isset($data[$name])) {
                $field->setData($data[$name]);
            }
        }
    }

    /**
     * Returns the data of all the sub elements.
     *
     * @return array
     */
    public function getData() : array
    {
        $data = [];

        foreach ($this->fields as $name => $field) {
            $data[$name] = $field->getData();
        }

        return $data;
    }

    /**
     * Renders the composite form element.
     *
     * @return string
     */
    public function render() : string
    {
        $output = '';

        foreach ($this->fields as $name => $field) {
            $output .= $field->render();
        }

        return $output;
    }
}
