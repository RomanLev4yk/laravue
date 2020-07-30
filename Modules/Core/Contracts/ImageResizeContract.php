<?php

namespace Modules\Core\Contracts;

interface ImageResizeContract
{
    public function imageResize($file, $width, $heigh);
}
