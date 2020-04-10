<?php

require_once 'vendor/autoload.php';

use DesignPattern\Singleton\Singleton;

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

print $s1->getMessage($s1, $s2) . "<br/>";
print $s2->getMessage($s1, $s2);
