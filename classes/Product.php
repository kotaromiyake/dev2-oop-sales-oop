<?php
include "Database.php";

class Product extends Database
{
    public function addProduct($request)
    {
        $product = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "INSERT INTO products (`product_name`, `price`, `quantity`)
        VALUES('$product','$price','$quantity')";

        if($this->conn->query($sql))
        {
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error in Adding: ".$this->conn->error);
        }
    }

    public function getAllProducts()
  {
    $sql = "SELECT * FROM products";

    if($result = $this->conn->query($sql))
    {
        return $result;
    }else{
        die('Error retrieving all products: ' .$this->conn->error);
    }
  }

  public function displaySpecificProduct($product_id)
    {
        $sql = "SELECT * FROM products WHERE id = '$product_id'";

        if($result = $this->conn->query($sql)) {
            return $result->fetch_assoc();
        } else {
            die("Error in retrieving product: ".$this->conn->error);
        }
    }

    public function editProduct($request) {
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];
        $product_id = $request['product_id'];
        $sql = "UPDATE products
                SET product_name = '$product_name',
                    price        = '$price',
                    quantity     = '$quantity'
                WHERE id = '$product_id'
                ";
        if($this->conn->query($sql)) {
            header("location: ../views/dashboard.php");
            exit;
        } else {
            die("Error in editing product: ".$this->conn->error);
        }
    }

    public function deleteProduct($product_id){
        $sql = "DELETE FROM products WHERE id = '$product_id'";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error in deleting product: ".$this->conn->error);
        }
    }

    public function payProduct($product_id,$buy_quantity)
    {
        $sql = "UPDATE products SET quantity = quantity - $buy_quantity WHERE id='$product_id'";

        if($this->conn->query($sql))
        {
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error in Paying Product: ".$this->conn->error);
        }
    }
}