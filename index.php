<?php
require_once('vendor/autoload.php');
define("PROD_URL", "http://{$_SERVER['SERVER_NAME']}/HockeyDashboard");
$controller = new App\Api\Controller();
$controller->sayHi($_SERVER['REQUEST_URI']);
echo "<br>";
echo "ooohahatfdsft";
?>
<li><a href="<?php echo PROD_URL ?>/Home">Home</a></li>
<li><a href="<?php echo PROD_URL ?>/Sales">Sales</a></li>
<li><a href="<?php echo PROD_URL ?>/Tickets">Tickets</a></li>
<li><a href="<?php echo PROD_URL ?>/Data">Data</a></li>

