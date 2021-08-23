<?php
require_once('vendor/autoload.php');
$controller = new App\Controllers\Router();
$controller->route($_SERVER['REQUEST_URI']);//sayHi($_SERVER['REQUEST_URI']);
?>
<li><a href="<?php echo PROD_URL ?>/Home">Home</a></li>
<li><a href="<?php echo PROD_URL ?>/Sales">Sales</a></li>
<li><a href="<?php echo PROD_URL ?>/Tickets">Tickets</a></li>
<li><a href="<?php echo PROD_URL ?>/Data">Data</a></li>

