<?php

namespace App\Model\Database\Entity\System;

use App\Model\Database\Entity;

class AccessLog extends Entity
{
	const ip = "ip";

	public string $ip;
}
