<?php

/**
 * @file
 * Contains DesignPattern\Bridge\Tv
 */

namespace DesignPattern\Bridge;

/**
 * A Tv class.
 */
class Tv extends Device
{
    /**
     * {@inheritdoc}
     */
    public function getDeviceState() : string {
        $output = "Device: TV\n";
        $output .= "Power State: " . ($this->isEnabled() ? "On" : "Off") . "\n";
        $output .= "Volume: " . $this->getVolume() . "\n";
        $output .= "Channel: " . $this->getChannel() . "\n\n";

        return $output;
    }
}
