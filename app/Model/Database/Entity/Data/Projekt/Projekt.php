<?php

namespace App\Model\Database\Entity\Data\Projekt;

use App\Model\Database\Entity;

class Projekt extends Entity
{
	const nazev = "nazev",
		zkraceny_popis = "zkraceny_popis",
		poznamka = "poznamka", sklo_id = "sklo_id",
		lam_temp = "lam_temp",
		trh_id = "trh_id",
		nazev_imds = "nazev_imds",
		cas_vytvoreni = "cas_vytvoreni";

	public string $nazev;
	public string $zkraceny_popis;
	public string $poznamka;
	public int $sklo_id;
	public bool $lam_temp; // 0 = lam, 1 = temp
	public int $trh_id;
	public string $nazev_imds;
	public string $cas_vytvoreni;
}
