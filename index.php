<?php
require_once('vendor/autoload.php');
$controller = new App\Api\Controller();
$controller->sayHi($_SERVER['REQUEST_URI']);
echo "ooohahatfdsft";
