<?php

namespace App\Model\Database;

use App\Model\Database\Entity\Data\_Pripravky\Cistic\CisticVyrobce;
use App\Model\Database\Entity\Data\_Pripravky\Granulat\GranulatVyrobce;
use App\Model\Database\Entity\Data\_Pripravky\KluznyLak\KluznyLakSlozeniMnozstvi;
use App\Model\Database\Entity\Data\_Pripravky\Cistic\Cistic;
use App\Model\Database\Entity\Data\_Pripravky\Cistic\CisticSlozeniMnozstvi;
use App\Model\Database\Entity\Data\_Pripravky\Cistic\CisticSlozeniLatky;
use App\Model\Database\Entity\Data\_Pripravky\KluznyLak\KluznyLakVyrobce;
use App\Model\Database\Entity\Data\_Pripravky\Lepidlo\Lepidlo;
use App\Model\Database\Entity\Data\_Pripravky\Lepidlo\LepidloSlozeniLatka;
use App\Model\Database\Entity\Data\_Pripravky\Lepidlo\LepidloSlozeniMnozstvi;
use App\Model\Database\Entity\Data\_Pripravky\Lepidlo\LepidloVyrobce;
use App\Model\Database\Entity\Data\_Pripravky\Redidlo\Redidlo;
use App\Model\Database\Entity\Data\_Pripravky\Redidlo\RedidloSlozeniLatka;
use App\Model\Database\Entity\Data\_Pripravky\Redidlo\RedidloSlozeniMnozstvi;
use App\Model\Database\Entity\Data\_Pripravky\Redidlo\RedidloVyrobce;
use App\Model\Database\Entity\Data\Material\Material;
use App\Model\Database\Entity\Data\Material\MaterialTyp;
use App\Model\Database\Entity\Data\Projekt\Projekt;
use App\Model\Database\Entity\Data\Projekt\ProjektSklo;
use App\Model\Database\Entity\Data\Projekt\ProjektTrh;
use App\Model\Database\Entity\Dynamic\RowNote;
use App\Model\Database\Entity\Dynamic\ViewNote;
use App\Model\Database\Entity\Data\_Pripravky\Granulat\Granulat;
use App\Model\Database\Entity\Data\_Pripravky\KluznyLak\KluznyLak;
use App\Model\Database\Entity\Data\_Pripravky\KluznyLak\KluznyLakSlozeniLatka;
use App\Model\Database\Entity\Data\_Pripravky\Granulat\GranulatSlozeniMnozstvi;
use App\Model\Database\Entity\Data\_Pripravky\Granulat\GranulatSlozeniLatka;
use App\Model\Database\Entity\Data\_Pripravky\Granulat\GranulatTyp;
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
		RowNote::class => "dyn_row_note",
		ViewNote::class => "dyn_view_note",

		// data
			// components
				Cistic::class => "data_cistic",
					CisticSlozeniMnozstvi::class => "data_cistic_slozeni_mnozstvi",
					CisticSlozeniLatky::class => "data_cistic_slozeni_latka",
					CisticVyrobce::class => "data_cistic_vyrobce",
				Granulat::class => "data_granulat",
					GranulatSlozeniMnozstvi::class => "data_granulat_slozeni_mnozstvi",
					GranulatTyp::class => "data_granulat_typ",
					GranulatSlozeniLatka::class => "data_granulat_slozeni_latka",
					GranulatVyrobce::class => "data_granulat_vyrobce",
				KluznyLak::class => "data_kluzny_lak",
					KluznyLakSlozeniMnozstvi::class => "data_kluzny_lak_slozeni_mnozstvi",
					KluznyLakSlozeniLatka::class => "data_kluzny_lak_slozeni_latka",
					KluznyLakVyrobce::class => "data_kluzny_lak_vyrobce",
				Lepidlo::class => "data_lepidlo",
					LepidloSlozeniLatka::class => "data_lepidlo_slozeni_latka",
					LepidloSlozeniMnozstvi::class => "data_lepidlo_slozeni_mnozstvi",
					LepidloVyrobce::class => "data_lepidlo_vyrobce",
				Redidlo::class => "data_redidlo",
					RedidloSlozeniLatka::class => "data_redidlo_slozeni_latka",
					RedidloSlozeniMnozstvi::class => "data_redidlo_slozeni_mnozstvi",
					RedidloVyrobce::class => "data_redidlo_vyrobce",
			// materials, projects, technical lists
			Material::class => "data_material",
				MaterialTyp::class => "data_material_typ",
			Projekt::class => "data_projekt",
				ProjektSklo::class => "data_projekt_sklo",
				ProjektTrh::class => "data_projekt_trh",

	];
}
