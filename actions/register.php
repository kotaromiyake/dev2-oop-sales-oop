<?php

include "../classes/User.php";

// instantiate class User / create user object
$user_obj = new User;

// call the method register from the class User
$user_obj->store($_POST);
// passing the $_POST data from the form
