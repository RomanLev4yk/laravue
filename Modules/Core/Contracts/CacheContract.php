<?php

namespace Modules\Core\Contracts;

interface CacheContract
{
    public function setCache($key, $data);
    public function setArrayCache($key, $data);
    public function getCache($key);
    public function getDecodeCache($key);
}
