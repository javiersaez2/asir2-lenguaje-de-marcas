
<?php
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate('en'); // Translates into English 

?>

<!DOCTYPE html>
<html>
<body>
1
<form action="ejemplo.php" method="get">
  <p>Nombre: <input type="text" name="nombre" size="40"></p>

    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </p>
</form>

1
</body>
</html>