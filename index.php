<?php

declare(strict_types=1);

use Wojtazzzz\UserValidator;

require_once __DIR__ . '/vendor/autoload.php';

$validator = new UserValidator();

$email = 'test@example.com';
$password = 'StrongPass1!';

if ($validator->validateEmail($email)) {
	echo "Email is valid.\n";
} else {
	echo "Email is invalid.\n";
}

if ($validator->validatePassword($password)) {
	echo "Password is valid.\n";
} else {
	echo "Password is invalid.\n";
}