<?php

namespace Modules\Core\Contracts\Services;

use Modules\Core\Contracts\ImageContract;
use Modules\Core\Contracts\ImageResizeContract;
use Modules\Core\Helpers\ImageConfig;
use Modules\Core\Helpers\StorageHelper;
use Modules\Core\Infrastructure\CoreService;

class ImageService extends CoreService implements ImageContract
{
    public function fileStoreDB($file, $folder, $width = 192, $height = 192): string
    {
        $image = $this->getDi(ImageResizeContract::class)->imageResize($file, $width, $height);
        $fileName = ImageConfig::normalizeName($image->__toString());
        StorageHelper::putToStorage(ImageConfig::getFullPath($folder, $fileName), $image);
        return $fileName;
    }

    public function removeStoreDB($file, $folder)
    {
        StorageHelper::deleteFromStorage($folder, $file);
    }
}
