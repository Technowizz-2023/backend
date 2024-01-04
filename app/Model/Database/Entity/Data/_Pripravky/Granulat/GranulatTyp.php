<?php

namespace App\Model\Database\Entity\Data\_Pripravky\Granulat;

use App\Model\Database\Entity;

class GranulatTyp extends Entity
{
	const zkratka = "zkratka", nazev = "nazev", poznamka = "poznamka";

	public string $zkratka;
	public string $nazev;
	public string $poznamka;
}
