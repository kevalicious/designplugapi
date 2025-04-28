<?php 
require_once("./api/db/database.php");
require_once("./product.php");
require_once("./api/interfaces/product.php");

class addProduct implements Product
{
   //most of the rules and properties have been defined in the product class
   //db connection and logic here
   public function saveProduct()
   {
     
   }

}


//receive incoming connection
$incoming = file_get_contents("php://input");

$product = new Product;

$product->setPid($incoming['pid']);
$product->setPname($incoimg['productname']);




//call addProduct class
$addProduct = new addProduct;
$addProduct->saveProduct();