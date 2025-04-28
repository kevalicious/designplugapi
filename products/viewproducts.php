<?php 
header("Access-Control-Allow-Origin: *");
require_once("../interfaces/product.php");
require_once("../db/database.php");

class viewProducts extends Database implements Product
{

   public function viewFurniture()
    {
       //db connection
      $sql = "SELECT * FROM `products` INNER JOIN products_skus ON products.product_id = products_skus.product_id";
      $db = new Database;
      $conn = $db->connectDb();
      $stmt = $conn->query($sql)->fetchAll();

      header("content-type: application/json");
     
      echo json_encode([$stmt]);


    }
    
}

$viewP = new viewProducts;
$viewP->viewFurniture();

