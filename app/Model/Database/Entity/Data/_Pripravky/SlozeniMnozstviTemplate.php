<?php

namespace App\Model\Database\Entity\Data\_Pripravky;

use App\Model\Database\Entity;

abstract class SlozeniMnozstviTemplate extends Entity
{
	const slozeni_latka_id = "slozeni_latka_id", mnozstvi = "mnozstvi";

	// public int $kluzny_lak/granulat/cistic..._id
	public int $slozeni_latka_id;
	public string $mnozstvi; // < or >, % or from-to percent (50% to 70%)
}
