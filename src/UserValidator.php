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
}