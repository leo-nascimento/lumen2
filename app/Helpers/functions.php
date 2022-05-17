<?php

use Intervention\Image\Facades\Image;

/**
 * @param $file
 * @return \Intervention\Image\Image
 */
function getImage($file) {
    return Image::make($file)->orientate()
        ->resize(768, 768, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 80);
}
