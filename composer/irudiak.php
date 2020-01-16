<?php
// include composer autoload
//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';
// http://image.intervention.io/
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;



// create Image from file
$img = Image::make('public/foo.jpg');

// write text
$img->text('The quick brown fox jumps over the lazy dog.');

// write text at position
$img->text('The quick brown fox jumps over the lazy dog.', 120, 100);

// use callback to define details
$img->text('foo', 0, 0, function($font) {
    $font->file('foo/bar.ttf');
    $font->size(24);
    $font->color('#fdf6e3');
    $font->align('center');
    $font->valign('top');
    $font->angle(45);
});

// draw transparent text
$img->text('foo', 0, 0, function($font) {
    $font->color(array(255, 255, 255, 0.5));
});
?>