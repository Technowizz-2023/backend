<?php

namespace App\Model\Database\Entity\Data\_Pripravky\Granulat;

use App\Model\Database\Entity\Data\_Pripravky\PripravekTemplate;

class Granulat extends PripravekTemplate
{
	const typ_id = "typ_id", cisteni = "cisteni",
		pocet_k = "pocet_k", kombinace = "kombinace";

	public int $typ_id;
	public string $cisteni;
	public string $pocet_k;
	public string $kombinace;
}
