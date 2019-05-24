<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

require_once '../HelloWorld/SayHello.php';

use HelloWorld\SayHello;

echo SayHello::world();

?>