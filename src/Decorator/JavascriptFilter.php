<?php

/**
 * @file
 * Contains DesignPattern\Decorator\JavascriptFilter
 */

namespace DesignPattern\Decorator;

/**
 * A JavascriptFilter decorator.
 */
class JavascriptFilter extends Filter
{

    /**
     * The tag pattern to detect JS code.
     *
     * @var array
     */
    protected $dangerousTagPatterns = [
        '|<script.*?>([\s\S]*)?</script>|i',
    ];

    /**
     * {@inheritdoc}
     */
    public function formatText(string $text) : string
    {
        $text = parent::formatText($text);

        foreach ($this->dangerousTagPatterns as $pattern) {
            $text = preg_replace($pattern, '', $text);
        }

        return $text;
    }

}
