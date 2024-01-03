<?php

namespace App\Model\Database\Entity\Dynamic;

use App\Model\Database\Entity;

class ViewNote extends Entity
{
	const frontend_view = "frontend_view";
	const note = "note";
	const user_id = "user_id";
	const global = "global";
	const time = "time";
	const id = "id";

	public string $frontend_view;
	public string $note;
	public int $user_id;
	public int $global;
	public string $time;
}
