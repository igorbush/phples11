<?php
session_start();
require_once 'app/autoloader.php';
$myCart = unserialize($_SESSION['myCart']);
foreach ($myCart->productList as $key => $value) 
{
	$content[] = array($value->getInfoProduct(), $myCart->productNumber[$key], $value->getTotalPrice()*$myCart->productNumber[$key]); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Заказ</title>
</head>
<body style="width: 700px; margin: 100px auto;">
<?php 
	$myOrder = new classes\order\Order($content);
	$myOrder->printOrder();
	session_destroy();
	echo '<a href="index.php"> Вернуться к списку товаров </a>';
?>
</body>
</html>