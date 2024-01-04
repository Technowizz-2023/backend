<?php

namespace App\Model\Database\Entity\Dynamic;

use App\Model\Database\Entity;

class RowNote extends Entity
{
	const global = "global", note = "note", eav_table = "eav_table",
		eav_column = "eav_column", eav_row_id = "eav_row_id";

	public bool $global;
	public string $note;
	public string $eav_table;
	public string $eav_column;
	public string $eav_row_id;
}
