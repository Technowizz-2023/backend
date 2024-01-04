<?php

namespace App\Model\Database\Entity\Data\Projekt;

use App\Model\Database\Entity;

class ProjektSklo extends Entity
{
	const zkratka = "zkratka";
	const nazev = "nazev";
	const poznamka = "poznamka";

	public string $zkratka;
	public string $nazev;
	public string $poznamka;
}
