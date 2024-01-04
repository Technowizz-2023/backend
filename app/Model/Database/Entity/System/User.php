<?php

namespace App\Model\Database\Entity\System;

use App\Model\Database\Entity;

class User extends Entity
{
	const firstname = "firstname", surname = "surname", email = "email", phone_number = "phone_number", password = "password", permissions = "permissions", root_admin = "root_admin";

	public string $firstname;
	public string $surname;
	public string $email;
	public string $phone_number;
	public string $password;
	public string $permissions;
	public bool $root_admin;
}
