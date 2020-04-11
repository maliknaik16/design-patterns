<?php

/**
 * @file
 * Contains DesignPattern\Bridge\AdvancedRemoteControl
 */

namespace DesignPattern\Bridge;

/**
 * A AdvancedRemoteControl class that contains more remote control options.
 */
class AdvancedRemoteControl extends RemoteControl
{

    /**
     * Mutes the device.
     *
     * @return void
     */
    public function mute() : void
    {
        $this->device->setVolume(0);
    }

}
