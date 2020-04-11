<?php

/**
 * @file
 * Contains DesignPattern\Composite\Form
 */

namespace DesignPattern\Composite;

/**
 * A Form class.
 */
class Form extends FieldComposite
{
    /**
     * The value for the action attribute.
     *
     * @var string
     */
    protected $url;

    /**
     * Initialize the form.
     *
     * @param string $name
     * @param string $title
     * @param string $url
     */
    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    /**
     * Renders the fieldset.
     *
     * @return string
     */
    public function render() : string
    {
        $output = parent::render();

        return "<form name=\"{$this->name}\" action=\"{$this->url}\">\n<h3>{$this->title}</h3>\n{$output}</form>\n";
    }
}
