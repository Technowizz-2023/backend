<?php

namespace App\Module\Controllers\V1\System;

use App\Model\Database\DataStructure;
use App\Model\Database\Entity\System\User;
use App\Model\Database\EntityRepository;
use App\Module\Controllers\V1\SystemBaseController;

/**
 * @Apitte\Path("/users")
 * @Apitte\Id("BaseUserController")
 */
class BaseUserController extends SystemBaseController
{
	protected EntityRepository $userRepository;

	public function __construct() {
		parent::__construct();

		$this->userRepository = $this->getDatabaseManager()->getEntityRepository(User::class);
	}
}
