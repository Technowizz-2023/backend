<?php declare(strict_types = 1);

namespace App\Module;

use Apitte\Core\Annotation\Controller as Apitte;
use Apitte\Core\UI\Controller\IController;
use App\Model\Database\DatabaseManager;
use Nette\DI\Attributes\Inject;

/**
 * @Apitte\Path("/api")
 * @Apitte\Id("api")
 */
abstract class BaseController implements IController
{
	/**
	 * @var DatabaseManager $databaseManager
	 */
	#[Inject]
	public DatabaseManager $databaseManager;

	public function __construct() {}

	protected function getDatabaseManager(): DatabaseManager {
		return $this->databaseManager;
	}
}
