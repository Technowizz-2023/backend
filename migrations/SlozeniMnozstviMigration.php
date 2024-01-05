<?php

// after this, use TraitSQLMigration
$pripravky = ["cistic", "granulat", "kluzny_lak", "lepidlo", "redidlo"];
foreach ($pripravky as $pripravek) {
	echo "CREATE TABLE `data_" . $pripravek . "_slozeni_mnozstvi` (
  `slozeni_latka_id` int NOT NULL,
  `" . $pripravek . "_id` int NOT NULL,
  `mnozstvi` varchar(32) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY
);" . "\n";
}

