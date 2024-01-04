<?php

namespace App\Model\Database\Entity\Data\Material;

use App\Model\Database\Entity;

class MaterialTyp extends Entity
{
	const nazev = "nazev", barva = "barva", poznamka = "poznamka";

	public string $nazev;
	public string $barva;
	public string $poznamka;
}
