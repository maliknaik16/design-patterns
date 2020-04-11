<?php

/**
 * @file
 * Contains DesignPattern\Composite\Fieldset
 */

namespace DesignPattern\Composite;

/**
 * A Fieldset class.
 */
class Fieldset extends FieldComposite
{
    /**
     * Renders the fieldset.
     *
     * @return string
     */
    public function render() : string
    {
        $output = parent::render();

        return "<fieldset>\n<legend>{$this->title}</legend>\n{$output}</fieldset>\n";
    }
}
