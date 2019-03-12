<?php
header("Content-Type: application/json; charset=UTF-8");

include_once 'dbclass.php';
include_once 'product.php';

$dbclass = new DBClass();
$connection = $dbclass->getConnection();

$product = new Product($connection);
$stmt = $product->read();
$count = $stmt->rowCount();

if($count > 0){
    $products = array();
    $products["status"] = true;
    $products["data"] = array();
    // $products["count"] = $count;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $p  = array(
              "srno" => $srno,
              "panelname" => $panelname,
              "tdsppm" => $tdsppm,
              "collection" => $collection,
              "powerusage" => $powerusage,
              "recharge" => $recharge,
              "tankempty" => $tankempty,
              "tanklevellow" => $tanklevellow
        );
        array_push($products["data"], $p);
    }
    echo json_encode($products);
}

else {
    echo json_encode(
        array("status" => false, "data" => null)
    );
}
?>