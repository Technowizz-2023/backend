<?php

namespace App\Model\Database;

use App\Model\Database\Columns\TCreatedAt;
use App\Model\Database\Columns\TCreatedByUserId;
use App\Model\Database\Columns\TEditedByUserId;
use App\Model\Database\Columns\TId;
use App\Model\Database\Columns\TUpdatedAt;
use App\Model\Utils\DateTime;

/**
 *
 */
abstract class Entity
{
	use TCreatedAt; // datetime
	use TUpdatedAt; // datetime
	use TCreatedByUserId; // foreign key to ID
	use TEditedByUserId; // foreign key to ID

	use TId; // autoincrement

	/**
	 * Build entity to final usage in SQL
	 * @param Entity $entity
	 * @param int $user_id
	 * @return $this
	 */
	public function finalBuild(self $entity, int $user_id): self {
		$entity->created_at = new DateTime();
		$entity->updated_at = new DateTime();
		// save actual user_id to created if this entity is new
		if(!isset($entity->created_by_user_id) || $entity->created_by_user_id === 0) $entity->created_by_user_id = $user_id;
		$entity->edited_by_user_id = $user_id;
		return $entity;
	}
}
