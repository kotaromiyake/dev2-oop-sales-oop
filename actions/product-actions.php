<?php

include_once "../classes/Product.php";

$product_obj = new Product;
if(isset($_POST['add_product']))
{
   $product_obj->addproduct($_POST);
}
elseif(isset($_POST['edit_product']))
{
   $product_obj->editProduct($_POST);
}elseif(isset($_POST['pay_product']))
{
   $product_id = $_GET['product_id'];
   $buy_quantity = $_POST['buy_quantity'];

   $product_obj->payProduct($product_id,$buy_quantity);
}