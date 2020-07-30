<?php

namespace Modules\User\Contracts\Services;

use Modules\Core\Infrastructure\CoreService;
use Modules\User\Contracts\Dtos\UserDto;
use Modules\User\Contracts\UserContract;
use Modules\User\Events\UserCreatedSuccessfully;
use Modules\User\Repositories\UserRepository;

/**
 *  class rating 4/5
 */
class UserService extends CoreService implements UserContract
{

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createUser(UserDto $dto)
    {
        try {
            $user = $this->repository->transaction(function () use ($dto) {
                $user = $this->create($dto);
                event(new UserCreatedSuccessfully($user));
                return $user;
            });
        } catch (\Exception $e) {
            return false;
        }
        return $user;
    }

    public function updateUser(UserDto $dto, int $userId)
    {
        return $this->repository->update($dto->getDataArray(), $userId);
    }

    protected function create(UserDto $dto)
    {
        return $this->repository->create($dto->getDataArray());
    }

//    protected function saveAvatar($file)
//    {
//        return $this->getDi(ImageContract::class)->fileStoreDB($file, ImageFolders::AVATAR_TYPE, 300, 300);
//    }

    public function get(int $userId)
    {
        return $this->repository->show($userId);
    }
}
