<?php

namespace App\Model\Database\Entity\Data\_Pripravky;

use App\Model\Database\Entity;

abstract class SlozeniLatkaTemplate extends Entity
{
	const nazev = "nazev", poznamka = "poznamka", kod = "kod";

	public string $nazev;
	public string $poznamka;
	public string $kod;
}
