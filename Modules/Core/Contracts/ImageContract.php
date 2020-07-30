<?php

namespace Modules\Core\Contracts;

interface ImageContract
{
    public function fileStoreDB($file, $folder, $width, $height): string;
    public function removeStoreDB($file, $folder);
}
