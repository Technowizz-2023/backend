<?php

namespace App;

require("../app\Model\Database\DataStructure.php");

use App\Model\Database\DataStructure;

$tables = array_values(DataStructure::ENTITIES);
foreach ($tables as $table) {
	echo "ALTER TABLE `$table`
ADD `created_at` datetime NOT NULL,
ADD `updated_at` datetime NOT NULL,
ADD `created_by_user_id` int NOT NULL,
ADD `edited_by_user_id` int NOT NULL;
" . "\n";
}
