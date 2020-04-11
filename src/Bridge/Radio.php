<?php

/**
 * @file
 * Contains DesignPattern\Bridge\Radio
 */

namespace DesignPattern\Bridge;

/**
 * A Radio class.
 */
class Radio extends Device
{
    /**
     * {@inheritdoc}
     */
    public function getDeviceState() : string {
        $output = "Device: Radio\n";
        $output .= "Power State: " . ($this->isEnabled() ? "On" : "Off") . "\n";
        $output .= "Volume: " . $this->getVolume() . "\n";
        $output .= "Channel: " . $this->getChannel() . "\n\n";

        return $output;
    }
}
