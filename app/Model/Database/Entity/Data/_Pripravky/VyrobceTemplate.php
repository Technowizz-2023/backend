<?php

namespace App\Model\Database\Entity\Data\_Pripravky;

use App\Model\Database\Entity;

abstract class VyrobceTemplate extends Entity
{
	const zkraceny_nazev = "zkraceny_nazev", plny_nazev = "plny_nazev", poznamka = "poznamka";

	public string $zkraceny_nazev;
	public string $plny_nazev;
	public string $poznamka;
}
