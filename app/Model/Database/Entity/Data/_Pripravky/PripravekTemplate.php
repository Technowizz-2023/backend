<?php

namespace App\Model\Database\Entity\Data\_Pripravky;

use App\Model\Database\Entity;


abstract class PripravekTemplate extends Entity
{
	const nazev = "nazev", aktivni = "aktivni", vyrobce_id = "vyrobce_id", nevhodne_kombinace = "nevhodne_kombinace", cas_vytvoreni = "cas_vytvoreni";

	public string $nazev;
	public bool $aktivni;
	public int $vyrobce_id;
	public string $nevhodne_kombinace;
	public string $cas_vytvoreni;
}
