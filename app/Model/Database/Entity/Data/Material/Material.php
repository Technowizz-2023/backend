<?php

namespace App\Model\Database\Entity\Data\Material;

use App\Model\Database\Entity;

class Material extends Entity
{
	const nazev = "nazev", typ_id = "typ_id", sap = "sap";

	public string $nazev;
	public int $typ_pripravku_id;
	public string $sap;
}
