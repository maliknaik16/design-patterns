<?php

require_once 'vendor/autoload.php';

use DesignPattern\ChainOfResponsibility\Request;
use DesignPattern\ChainOfResponsibility\Authenticate;
use DesignPattern\ChainOfResponsibility\Authorize;
use DesignPattern\ChainOfResponsibility\Welcome;

// Instantiate few requests.
$admin = new Request('admin@example.com', '1234');
$customer = new Request('customer@example.com', '1234');
$nonuser = new Request('testing@example.com', '8080');

// Instantiate the Authenticate and Authorize objects.
$authenticate = new Authenticate;
$authorize = new Authorize;
$welcome = new Welcome;

// Set the chain of responsibility
$authenticate->setNext($authorize);
$authorize->setNext($welcome);

// Handle some requests.
print "Admin\n";
print "=========================\n";
$authenticate->handle($admin);
print "\nCustomer\n";
print "=========================\n";
$authenticate->handle($customer);
print "\nNon user\n";
print "=========================\n";
$authenticate->handle($nonuser);

// Outputs:
//
// Admin
// =========================
// Authenticate: User successfully authenticated.
// Authorize: User authorized as admin.
// Welcome back, Administrator.

// Customer
// =========================
// Authenticate: User successfully authenticated.
// Authorize: User authorized as customer.
// Welcome back, regular customer.

// Non user
// =========================
// Authenticate: Unable to authenticate user.
