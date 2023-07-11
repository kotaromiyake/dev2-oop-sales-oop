<?php
session_start();

include "../classes/Product.php";

$product = new Product;

$product_details = $product->displaySpecificProduct($_GET['product_id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="card w-50 my-auto mx-auto border-0">
            <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center text-warning display-1 fw-bold">
            <i class="fa-solid fa-pen-to-square text-warning mx-3"></i>Edit Product</h1>
            </div>
            <div class="card-body">
                <form action="../actions/product-actions.php" method="post">

                <input type="hidden" name="product_id" value="<?= $product_details['id']?>">

                <div class="row mb-3">  
                        <div class="col">
                            <label for="product_name" class="form-label text-muted">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product_details['product_name']?>" required autofocus>
                        </div>

                </div>  
                <div class="row mb-3">
                    <div class="col">  
                        <div class="mb-3">
                            <label for="price" class="form-label text-muted">Price</label>
                            <div class="input-group mb-2">
                            <div class="input-group-text">$</div>
                            <input type="number" name="price" id="price" class="form-control" value="<?= $product_details['price']?>"
                             required>
                            </div>
                        </div>
                    </div>
                    <div class="col">  
                        <div class="mb-3">
                            <label for="quantity" class="form-label text-muted">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product_details['quantity']?>" required>
                        </div>
                    </div>
                 </div>
                     <button type="submit" class="btn btn-warning w-100" name="edit_product">Edit</button>
                </form>
            </div>
        </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>