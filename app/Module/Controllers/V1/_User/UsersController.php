<?php declare(strict_types = 1);

namespace App\Module\V1\_User;

use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Facade\UsersFacade;
use App\Domain\Api\Response\UserResDto;
use App\Model\Utils\Caster;
use App\Module\Controllers\BaseV1Controller;

/**
 * @Apitte\Path("/users")
 * @Apitte\Tag("Users")
 */
class UsersController extends BaseV1Controller
{

	private UsersFacade $usersFacade;

	public function __construct(UsersFacade $usersFacade)
	{
		$this->usersFacade = $usersFacade;
	}

	/**
	 * @Apitte\OpenApi("
	 *   summary: List users.
	 * ")
	 * @Apitte\Path("/")
	 * @Apitte\Method("GET")
	 * @Apitte\RequestParameters({
	 * 		@Apitte\RequestParameter(name="limit", type="int", in="query", required=false, description="Data limit"),
	 * 		@Apitte\RequestParameter(name="offset", type="int", in="query", required=false, description="Data offset")
	 * })
	 * @return UserResDto[]
	 */
	public function index(ApiRequest $request): array
	{
		return $this->usersFacade->findAll(
			Caster::toInt($request->getParameter('limit', 10)),
			Caster::toInt($request->getParameter('offset', 0))
		);
	}

}
