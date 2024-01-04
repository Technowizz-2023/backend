<?php

namespace App\Model\Database\Columns;

trait TEditedByUserId
{
	static string $col = "edited_by_user_id";

	public int $edited_by_user_id;
}
