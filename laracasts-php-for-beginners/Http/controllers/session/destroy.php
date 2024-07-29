<?php 
use Core\Authenticator;

//% log the user out
Authenticator::logout();

header('location: /');
exit();