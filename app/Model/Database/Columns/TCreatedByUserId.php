<?php

namespace App\Model\Database\Columns;

use App\Model\Database\Entity;

trait TCreatedByUserId
{
	static string $col = "created_by_user_id";

	public int $created_by_user_id;
}
