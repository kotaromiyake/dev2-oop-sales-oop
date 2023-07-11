<?php

include "../classes/User.php";

// creste user object
$user_obj = new User;

$user_obj->login($_POST);
