<?php

/**
 * @file
 * Contains DesignPattern\Bridge\RemoteControl
 */

namespace DesignPattern\Bridge;

/**
 * A RemoteControl class that composes the Device class.
 */
class RemoteControl
{
    /**
     * The instance of the device.
     *
     * @var DesignPattern\Bridge\Device
     */
    protected $device;

    /**
     * Initialize the device.
     *
     * @param DesignPattern\Bridge\Device
     */
    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    /**
     * Turns the device On/Off.
     *
     * @return void
     */
    public function togglePower() : void
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    /**
     * Increseas the volume by 5.
     *
     * @return void
     */
    public function volumeUp() : void
    {
        $volume = $this->device->getVolume();
        $this->device->setVolume($volume + 5);
    }

    /**
     * Decreses the volume by 5.
     *
     * @return void
     */
    public function volumeDown() : void
    {
        $volume = $this->device->getVolume();
        $this->device->setVolume($volume - 5);
    }

    /**
     * Goes to the next channel.
     *
     * @return void
     */
    public function channelUp() : void
    {
        $volume = $this->device->getChannel();
        $this->device->setChannel($volume + 1);
    }

    /**
     * Goes to the previous channel.
     *
     * @return void
     */
    public function channelDown() : void
    {
        $volume = $this->device->getChannel();
        $this->device->setChannel($volume - 1);
    }

    /**
     * Returns the state of the device as string.
     *
     * @return string
     */
    public function getDeviceState() : string
    {
        return $this->device->getDeviceState();
    }
}
