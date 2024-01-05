<?php

namespace App\Module\V1\System\User;

use Apitte\Core\Exception\Api\ClientErrorException;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Response\UserResDto;
use App\Model\Database\Entity\System\User;
use App\Model\Database\EntityRepository;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;
use App\Model\Utils\Caster;
use App\Module\Controllers\V1\System\BaseUserController;
use Nette\Http\IResponse;

/**
 * @Apitte\Path("/")
 */
class UsersOneController extends BaseUserController
{
	/**
	 * @Apitte\OpenApi("
	 *   summary: Get user by id.
	 * ")
	 * @Apitte\Path("/{id}")
	 * @Apitte\Method("GET")
	 * @Apitte\RequestParameters({
	 *      @Apitte\RequestParameter(name="id", in="path", type="int", description="User ID")
	 * })
	 */
	public function byId(ApiRequest $request): array
	{
		try {
			$id = Caster::toInt($request->getParameter("id"));
			/**
			 * @var User $user
			 */
			$user = $this->userRepository->findById($id);
			unset($user->password);
		} catch (EntityNotFoundException $e) {
			throw ClientErrorException::create()
				->withMessage('User not found')
				->withCode(IResponse::S404_NotFound);
		}
	}
}
