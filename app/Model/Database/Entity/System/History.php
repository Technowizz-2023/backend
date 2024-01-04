<?php

namespace App\Model\Database\Entity\System;

use App\Model\Database\Entity;

class History extends Entity
{
	const table = "table", changes = "changes", row_id = "row_id", action_type = "action_type";

	public string $table; // related to "table"
	public string $changes;
	public int $row_id;
	public string $action_type;
}
