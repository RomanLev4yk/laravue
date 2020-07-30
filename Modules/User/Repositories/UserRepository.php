<?php

namespace Modules\User\Repositories;

use Modules\Core\Repositories\Repository;
use Modules\User\Entities\User;

/**
 *  class rating 5/5
 */
class UserRepository extends Repository
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function syncUserNotify($notifyIds, $userId)
    {
        return $this->show($userId)->typeNotifies()->syncWithoutDetaching($notifyIds);
    }

    public function massChangeStatus(array $userIds, string $status)
    {
        return $this->model->whereIn('id', $userIds)->update(['status' => $status]);
    }

    public function changeStatus(int $userId, $userStatus)
    {
        $user = $this->show($userId);

        switch ($userStatus) {
            case UserStatus::ACTIVE:
                $user->deactivate();
                break;
            case UserStatus::NOT_ACTIVE:
                $user->activate();
                break;
            default:
                break;
        }
        return $user;
    }
}
