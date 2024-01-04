<?php

namespace App\Model\Database\Entity\Dynamic;

use App\Model\Database\Entity;

class ViewNote extends Entity
{
	const frontend_view = "frontend_view";
	const note = "note";
	const global = "global";

	public string $frontend_view;
	public string $note;
	public int $global;
}
