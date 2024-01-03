<?php

namespace App\Model\Database;

use App\Model\Database\Entity\Data\_Pripravky\KluznyLak\KluznyLakSlozeni;
use App\Model\Database\Entity\Data\_Pripravky\Cistic\Cistic;
use App\Model\Database\Entity\Data\_Pripravky\Cistic\CisticSlozeni;
use App\Model\Database\Entity\Data\_Pripravky\Cistic\CisticSlozeniLatky;
use App\Model\Database\Entity\Data\Material\Material;
use App\Model\Database\Entity\Data\Material\MaterialTyp;
use App\Model\Database\Entity\Data\Projekt\Projekt;
use App\Model\Database\Entity\Data\Projekt\ProjektSklo;
use App\Model\Database\Entity\Data\Projekt\ProjektTrh;
use App\Model\Database\Entity\Dynamic\RowNote;
use App\Model\Database\Entity\Dynamic\ViewNote;
use App\Model\Database\Entity\Data\_Pripravky\Granulat\Granulat;
use App\Model\Database\Entity\Data\_Pripravky\KluznyLak\KluznyLak;
use App\Model\Database\Entity\Data\_Pripravky\KluznyLak\KluznyLakSlozeniLatky;
use App\Model\Database\Entity\Granulat\GranulatSlozeni;
use App\Model\Database\Entity\Granulat\GranulatSlozeniLatky;
use App\Model\Database\Entity\Granulat\GranulatTyp;
use App\Model\Database\Entity\System\AccessLog;
use App\Model\Database\Entity\System\History;
use App\Model\Database\Entity\System\User;

interface DataStructure
{
	const ENTITIES = [
		// system
		AccessLog::class => "sys_access_log",
		History::class => "sys_history",
		User::class => "sys_user",

		// dynamic
		RowNote::class => "row_note",
		ViewNote::class => "view_note",

		// data
			// components
				Cistic::class => "data_cistic",
					CisticSlozeni::class => "data_cistic_slozeni",
					CisticSlozeniLatky::class => "data_cistic_slozeni_latky",
				Granulat::class => "data_granulat",
					GranulatSlozeni::class => "data_granulat_slozeni",
					GranulatTyp::class => "data_granulat_typ",
					GranulatSlozeniLatky::class => "data_granulat_slozeni_latky",
				KluznyLak::class => "data_kluzny_lak",
					KluznyLakSlozeni::class => "data_kluzny_lak_slozeni",
					KluznyLakSlozeniLatky::class => "data_kluzny_lak_slozeni_latky",
			Material::class => "data_material",
				MaterialTyp::class => "data_material_typ",
			Projekt::class => "data_projekt",
				ProjektSklo::class => "data_projekt_sklo",
				ProjektTrh::class => "data_projekt_trh",
	];
}
