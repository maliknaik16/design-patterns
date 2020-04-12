<?php

/**
 * @file
 * Contains DesignPattern\Decorator\MarkDownFilter
 */

namespace DesignPattern\Decorator;

/**
 * A MarkDownFilter decorator.
 */
class MarkDownFilter extends Filter
{

    /**
     * {@inheritdoc}
     */
    public function formatText(string $text) : string
    {
        $text = parent::formatText($text);

        $lines = preg_split("|\n\n|", $text);

        foreach ($lines as &$line) {
            if (preg_match('|^#+|', $line)) {
                $line = preg_replace_callback('|^(#+)[ ](.*)|', function ($matches) {
                    $len = strlen($matches[1]);

                    return "<h{$len}>{$matches[2]}</h{$len}>";
                }, $line);
            } else {
                $line = '<p>' . $line . '</p>';
            }
        }

        $text = implode("\n\n", $lines);

        $text = preg_replace("|\*\*(.+)\*\*|", "<strong>$1</strong>", $text);
        $text = preg_replace("|\*(.+)\*|", "<em>$1</em>", $text);
        $text = preg_replace("|__(.+)__|", "<strong>$1</strong>", $text);
        $text = preg_replace("|_(.+)_|", "<em>$1</em>", $text);
        $text = preg_replace("|\[(.*)\]\((.*)\)|", "<a href=\"$2\">$1</a>", $text);

        return $text;
    }

}
