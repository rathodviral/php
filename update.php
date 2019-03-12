<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'dbclass.php';
include_once 'product.php';

$dbclass = new DBClass();
$connection = $dbclass->getConnection();

$product = new Product($connection);

$data = json_decode(file_get_contents("php://input"));

$product->panelname = $data->panelname;
$product->tdsppm = $data->tdsppm;
$product->collection = $data->collection;
$product->powerusage = $data->powerusage;
$product->recharge = $data->recharge;
$product->tankempty = $data->tankempty;
$product->tanklevellow = $data->tanklevellow;

if(isset($_GET['srno'])){
	if($product->update($_GET['srno'])){
		echo '{';
			echo '"status": true, "message": "Product was updated."';
		echo '}';
	}
	else{
		echo '{';
			echo '"status": false, "message": "Unable to udpate product."';
		echo '}';
	}
}else{
	echo '{';
		echo '"status": false, "message": "No Product Id found."';
	echo '}';

}
?>