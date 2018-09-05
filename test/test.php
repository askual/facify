<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Askual\Facify;

try {
    $FaceApp = new Facify(__DIR__.'/image.jpg');

    $photoCode = $FaceApp->getPhotoCode();

    $filter = 'glasses';

    $FaceApp->applyFilter($photoCode, $filter, true);

    if ($FaceApp->savePhoto('newImage.jpg')) {
        //Done !
        //image saved to "__DIR__/newImagee.jpg" and now we wanna show it
        header('Content-Type: image/jpeg');
        readfile('newImage.jpg');
    }
} catch (Exception $e) {
    exit($e->getMessage());
}
