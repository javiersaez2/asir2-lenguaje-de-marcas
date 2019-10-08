<?php

//$suma = $v[0] + $v[1] + $v[2];
//echo "batura : " . $suma;

$v = [1,5,6];
$suma = 0;

//for ($x = 0; $x <3; $x++){
    //echo "The number is : $x <br>";
    //$suma = $suma + $v[$x];
    //echo "batura : " . $suma;
    //echo "<br>";
//}

$x=0;
while($x < 3) {
    $suma = $suma + $v[$x];
    $x++;
    
}
echo "batura : " . $suma;
?>