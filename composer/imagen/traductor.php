
<?php
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate('es'); // Translates into English

?>


<!DOCTYPE html>
<html>
<body>
1
<?php echo $tr->translate('Hello World!'); ?>
1
</body>
</html>