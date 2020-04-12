<?php

require_once 'vendor/autoload.php';

use DesignPattern\Bridge\RemoteControl;
use DesignPattern\Bridge\AdvancedRemoteControl;

use DesignPattern\Bridge\Radio;
use DesignPattern\Bridge\Tv;

// Instantiate the Radio device.
$radio = new Radio;

// Instantiate the Tv device.
$tv = new Tv;

// Get the remote on the Tv.
$tv_remote = new AdvancedRemoteControl($tv);

// Get the remote on the radio.
$radio_remote = new RemoteControl($radio);

// Print the states of the device before and after performing some operations.
print "Device State (Before): \n";
print "======================\n";
print $tv_remote->getDeviceState();
print $radio_remote->getDeviceState();

$tv_remote->channelUp();
$tv_remote->mute();
$tv_remote->togglePower();

$radio_remote->channelUp();
$radio_remote->channelUp();
$radio_remote->channelUp();
$radio_remote->volumeDown();

print "Device State (After): \n";
print "======================\n";
print $tv_remote->getDeviceState();
print $radio_remote->getDeviceState();

// Outputs:
//
// Device State (Before):
// ======================
// Device: TV
// Power State: Off
// Volume: 50
// Channel: 1

// Device: Radio
// Power State: Off
// Volume: 50
// Channel: 1

// Device State (After):
// ======================
// Device: TV
// Power State: On
// Volume: 0
// Channel: 2

// Device: Radio
// Power State: Off
// Volume: 45
// Channel: 4
