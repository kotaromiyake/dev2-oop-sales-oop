<?php
session_start();

include "../classes/Product.php";

    $product = new Product;

    $product_list = $product->getAllProducts();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between">
        <a href="dashboard.php" class="ms-3" title="Home">
            <i class="fa-solid fa-house fa-2x text-dark"></i>
        </a>

        <a href="profile.php" class="nav-link text-secondary">
            <span class="fw-bold fs-5">Welcome, <?= ucfirst($_SESSION['username'])?></span>
        </a>

        <!-- <div class="ms-auto me-3 navbar-nav"> -->
            <a href="../actions/logout.php" class="me-3" title="Logout"><i class="fa-solid fa-user-xmark fa-2x text-danger"></i></a>
        <!-- </div> -->
    </nav>
    
    <div class="container mt-5">
        <div class="card w-75 border-0 mx-auto">
            <div class="card-header bg-white border-0">
                <div class="row">
                    <div class="col text-start">
                        <h1 class="display-6 fw-bold">Product List</h1>
                    </div>
                    <div class="col text-end">
                        <i class="fa-solid fa-plus fa-3x text-info" data-bs-toggle="modal" data-bs-target="#add-product" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- products table -->
    <div class="container">
    <table class="table table-hover">
                    <thead class="table-dark">
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                         foreach($product_list as $product){
                          ?>
                          <tr>
                            <td><?= $product['id']?></td>
                            <td><?= $product['product_name']?></td>
                            <td><?= $product['price']?></td>
                            <td><?= $product['quantity']?></td>
                            <td class="">
                              <a href="edit-product.php?product_id=<?= $product['id'] ?>" class="btn 
                              btn-warning btn-sm" title="Edit Product"><i class="fa-solid fa-pen"></i></a>
                              
                              <a href="../actions/delete-product.php?product_id=<?= $product['id'] ?>" class="btn 
                              btn-danger btn-sm" title="Delete Product"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            <td>
                              <a href="../views/buy-product.php?product_id=<?= $product['id'] ?>" class="btn
                               btn-success btn-sm" title="Buy Product"><i class="fa-solid fa-cash-register"></i></a>
                            </td>
                          </tr>

                          <?php
                         }
                        ?>
                    </tbody>
                </table>
    </div>

    

    <!-- Modal -->
<div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      
        <div class="card w-100 my-auto mx-auto border-0">
            <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center text-info display-4 fw-bold">
            <i class="fa-solid fa-box text-info mx-3"></i>Add Product</h1>
            </div>
            <div class="card-body">
                <form action="../actions/product-actions.php" method="post">
                <div class="row mb-3">  
                        <div class="col">
                            <label for="product_name" class="form-label text-muted">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" required autofocus>
                        </div>

                </div>  
                <div class="row mb-3">
                    <div class="col">  
                        <div class="mb-3">
                            <label for="price" class="form-label text-muted">Price</label>
                            <div class="input-group mb-2">
                            <div class="input-group-text">$</div>
                            <input type="number" name="price" id="price" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">  
                        <div class="mb-3">
                            <label for="quantity" class="form-label text-muted">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" required>
                        </div>
                    </div>
                 </div>
                     <button type="submit" class="btn btn-info w-100" name="add_product">Add</button>
                </form>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>

    



    <!--script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>