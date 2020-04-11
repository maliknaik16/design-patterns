<?php

require_once 'vendor/autoload.php';

use DesignPattern\Composite\Form;
use DesignPattern\Composite\Fieldset;
use DesignPattern\Composite\Input;

// Create a form
$form = new Form('login', 'Login to your account', '/login');

// Add username and password fields to the form.
$form->add(new Input('username', 'Username', 'text'));
$form->add(new Input('password', 'Password', 'password'));

// Add a field set with caption and image
$picture = new Fieldset('photo', 'Product Photo');
$picture->add(new Input('caption', 'Caption', 'text'));
$picture->add(new Input('image', 'Image', 'file'));

// Add the fieldset to the form.
$form->add($picture);

// Initialize form data array.
$data = [
    'username' => 'admin',
    'password' => '1234',
    'photo' => [
        'caption' => 'Photo Caption',
        'image' => 'photo.png'
    ],
];

// Set data to the form.
$form->setData($data);

// Render the form.
echo $form->render();

// Outputs:
//
// <form name="login" action="/login">
// <h3>Login to your account</h3>
// <label for="username">Username</label>
// <input type="text" name="username" value="admin"/>
// <label for="password">Password</label>
// <input type="password" name="password" value="1234"/>
// <fieldset>
// <legend>Product Photo</legend>
// <label for="caption">Caption</label>
// <input type="text" name="caption" value="Photo Caption"/>
// <label for="image">Image</label>
// <input type="file" name="image" value="photo.png"/>
// </fieldset>
// </form>
