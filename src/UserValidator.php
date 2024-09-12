<?php

declare(strict_types=1);

namespace Wojtazzzz;

final readonly class UserValidator
{
	public function validateEmail(string $email): bool
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return false;
		}

		$regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

		if (!preg_match($regex, $email)){
			return false;
		}

		return true;
	}

	public function validatePassword(string $password): bool
	{
		if (strlen($password) < 8) {
			return false;
		}

		if (!preg_match('/[A-Z]/', $password)) {
			return false;
		}

		if (!preg_match('/[a-z]/', $password)) {
			return false;
		}

		if (!preg_match('/[0-9]/', $password)) {
			return false;
		}

		if (!preg_match('/\W/', $password)) {
			return false;
		}

		return true;
	}
}