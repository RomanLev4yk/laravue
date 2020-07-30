<?php

namespace Modules\Core\Contracts\Services;

use Modules\Core\Contracts\ImageResizeContract;
use Modules\Core\Helpers\ImageConfig;
use Modules\Core\Infrastructure\CoreService;

use Intervention\Image\ImageManagerStatic as Image;

class ImageResizeService extends CoreService implements ImageResizeContract
{
    public function imageResize($file, $width, $height)
    {
        return Image::make($file)->fit($width, $height)->encode(ImageConfig::EXTENSION);
    }
}
