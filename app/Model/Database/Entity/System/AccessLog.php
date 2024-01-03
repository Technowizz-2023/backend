<?php

namespace App\Model\Database\Entity\System;

use App\Model\Database\Entity;

class AccessLog extends Entity
{
	const user_id = "user_id", ip = "ip", time = "time";

	public int $user_id;
	public string $ip;
	public string $time;
}
