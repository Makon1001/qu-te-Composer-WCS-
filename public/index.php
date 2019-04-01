<?php require '../vendor/autoload.php';

$hello2 = new HelloWorld\SayHello();
echo $hello2->world();

$hello = new App\Wcs\Hello();
echo $hello->talk();



?>
