<?php

namespace App\Model\Database;

use Nette\Database\Explorer;

class DatabaseManager
{
	public function __construct(private Explorer $explorer) {
	}

	/**
	 * @param $entityName
	 * @return Repository
	 */
	public function getEntityRepository($entityName): Repository
	{
		return new Repository(DataStructure::ENTITIES[$entityName], $this->explorer);
	}
}
