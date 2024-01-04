<?php

namespace App\Model\Database\Entity\Data\_Pripravky;

use App\Model\Database\Entity;


abstract class PripravekTemplate extends Entity
{
	const nazev = "nazev", typ_slozeni = "typ_slozeni", pouziti = "pouziti", aktivni = "aktivni", vyrobce_id = "vyrobce_id", nevhodne_kombinace = "nevhodne_kombinace", cas_vytvoreni = "cas_vytvoreni";

	public string $nazev;
	public bool $aktivni;
	public int $vyrobce_id;
	public string $pouziti; // groupset
	public string $nevhodne_kombinace;
	public string $cas_vytvoreni;
	public string $typ_slozeni;
}
