<?php

// after this, use TraitSQLMigration
$tables = ["data_cistic_slozeni_latka", "data_granulat_slozeni_latka", "data_kluzny_lak_slozeni_latka", "data_lepidlo_slozeni_latka", "data_redidlo_slozeni_latka"];
foreach ($tables as $table) {
	echo "CREATE TABLE `$table` (
  `nazev` varchar(255) NOT NULL,
  `poznamka` text NOT NULL,
  `kod` varchar(16) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY);
" . "\n";
}
