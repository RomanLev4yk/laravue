<?php

namespace Modules\Core\Contracts\Services;

use Modules\Core\Contracts\CacheContract;
use Modules\Core\Infrastructure\CoreService;

use Illuminate\Support\Facades\Redis;

class RedisService extends CoreService implements CacheContract
{
    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }

    public function getCache($key)
    {
        return $this->redis::get($key);
    }

    public function setCache($key, $data)
    {
        return $this->redis::set($key, $data);
    }

    public function setArrayCache($key, $data)
    {
        return $this->redis::set($key, $this->toJson($data));
    }

    public function getDecodeCache($key)
    {
        return $this->toData($this->getCache($key));
    }
}
