<?php
header("Access-Control-Allow-Origin: http://localhost:4200");

require_once("./product.php");


class viewproductId extends Product
{

   public function viewProduct(){
      $sql = "SELECT * FROM `products` INNER JOIN products_skus ON products.product_id = products_skus.product_id WHERE products.product_id = :id";
      
      require_once("../db/database.php");
      $db = new Database;
      $conn = $db->connectDb();

      //read incoming ID
      $id = $_GET['id'];
      $this->setPid($id);
      $productID = $this->getPid();
           

      $stmt = $conn->prepare($sql);

      
      try {
         $stmt->execute([':id' => $productID]);
      } catch (\Exception $e) {
        header("content-type: application/json");
        echo json_encode(["code"=>201, "error"=>$e->getMessage()]);
      }

      $list = $stmt->fetch();

      if($stmt->rowCount() === 0){
            header("content-type: application/json");
            echo json_encode(["response"=>["code" => 202, "response" => "No product with such ID."]]);
      }else{
        header("content-type: application/json");
        echo json_encode(["result"=>$list]);
      }




      

   }

}


$viewP = new viewproductId;
$viewP->viewProduct();
