<?php

declare(strict_types=1);

use Wojtazzzz\UserValidator;

require_once __DIR__ . '/vendor/autoload.php';

$validator = new UserValidator();

$email = "test@example.com";

if ($validator->validateEmail($email)) {
	echo "Email is valid.\n";
} else {
	echo "Email is invalid.\n";
}