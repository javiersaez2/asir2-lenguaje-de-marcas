<?php
require 'vendor/autoload.php';
use DmitryIvanov\DarkSkyApi\DarkSkyApi;
$forecast = (new DarkSkyApi('bd7f2cbc7fbdeb614c162a0d96d8e8ee'))
    ->location(43.184 , -2.473 )
    ->units('si')
    ->language('es')
    ->forecast(['currently', 'daily']);
echo $forecast->daily()->summary();
echo $forecast->currently()->summary();
?>


  