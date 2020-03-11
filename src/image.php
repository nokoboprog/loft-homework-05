<?php

require_once '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('../images/example.jpg');
$img->rotate(45);
$img->insert('../images/watermark.png', 'top-right', 25, 25);
$img->resize(200, null, function ($constraint) {
    $constraint->aspectRatio();
    $constraint->upsize();
});
$img->save('../images/example_new.jpg');

echo $img->response('jpg');
