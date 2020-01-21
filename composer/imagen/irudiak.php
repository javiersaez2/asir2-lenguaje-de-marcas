<?php
// include composer autoload
//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';
// http://image.intervention.io/
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;
// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'imagick'));
// and you are ready to go ...
$image = Image::make('eibar.jpg')->resize(300, 200);
//// finally we save the image as a new file
//$image->save('eibar2.jpg');
//
$image->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
echo "<img src=$base64>";
//*********** */
// resize the image to a width of 300 and constrain aspect ratio (auto height)
$image = Image::make('eibar.jpg');
$image->resize(300, null, function ($constraint) {
    $constraint->aspectRatio();
});
$image->greyscale();
$image->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
echo "<img src=$base64>";

//*********** */
$image = Image::make('eibar.jpg');
// rotate image 45 degrees clockwise
$image->rotate(-45);
$image->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
echo "<img src=$base64>";

//*********** */
$image = Image::make('eibar.jpg');
$image->pixelate(12);
$image->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
echo "<img src=$base64>";


$image = Image::canvas(800, 600, '#ddd');

$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
echo "<img src=$base64>";
// define polygon points
$points = array(
    40,  50,  // Point 1 (x, y)
    20,  240, // Point 2 (x, y)
    60,  60,  // Point 3 (x, y)
    240, 20,  // Point 4 (x, y)
    50,  40,  // Point 5 (x, y)
    10,  10   // Point 6 (x, y)
);

// draw a filled blue polygon with red border
// create empty canvas with background color
$image = Image::canvas(100, 100, '#ddd');

// draw a blue line
$image->line(10, 10, 100, 10, function ($draw) {
    $draw->color('#0000ff');
});

// draw a red line with 5 pixel width
$image->line(10, 10, 195, 195, function ($draw) {
    $draw->color('#f00');
    $draw->width(5);
});
?>
<form action="ejemplo.php" method="get">
  <p>Nombre: <input type="text" name="nombre" size="40"></p>
  <input type="submit" value="Enviar">