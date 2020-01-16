<?php  
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate('en'); // Translates into English 
echo $tr->translate( $_GET['nombre']);?>
<!DOCTYPE html>
<html>
<body>
1
<form action="traductor.php" method="get">
  <p>Nombre: <input type="text" name="nombre" value="<?php echo $_GET['nombre'] ?>" size="40"></p>

  </p>
</form>

1
</body>
</html>