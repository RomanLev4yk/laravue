<?php

namespace Modules\Core\Contracts\Services;

use Modules\Core\Contracts\Dtos\LogDto;
use Modules\Core\Contracts\LogContract;
use Modules\Core\Enums\Module;
use Modules\Core\Enums\Type;
use Modules\Core\Infrastructure\CoreService;
use Modules\Core\Repositories\LogRepository;

class LogService extends CoreService implements LogContract
{
    private $repository;

    public function __construct(LogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function notificationLog($message, $data)
    {
        $this->createLog($this->buildDto(Module::SUBSCRIPTION, Type::INFO, $message, $data));
    }

    public function createLog(LogDto $dto)
    {
        if (!empty($dto->data)) {
            //$dto->data = $this->toJson($dto->data);
            return $this->repository->create($dto->getDataArray());
        }
    }

    private function buildDto($module, $type, $message, $data)
    {
        $dto = new LogDto();
        $dto->module = $module;
        $dto->type = $type;
        $dto->message = $message;
        $dto->data = $data;
        return $dto;
    }
}
