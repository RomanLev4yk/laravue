<?php

namespace Modules\Core\Helpers;

use Illuminate\Support\Facades\Storage;

class StorageHelper
{
    public static function getStorage()
    {
        return Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
    }

    public static function putToStorage($filePath, $content)
    {
        return Storage::disk('local')->put($filePath, $content);
    }

    public static function deleteFromStorage($filePath, $file)
    {
        Storage::disk('local')->delete(ImageConfig::getFullPath($filePath, $file));
    }
}
