<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
            <div class="card w-50 my-auto mx-auto border-0">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="display-1 fw-bold text-center text-primary">LOGIN
                        <i class="fa-solid fa-right-to-bracket text-primary"></i></h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <div class="row">
                            <div class="col-3 text-end">
                                <label for="username" class="text-muted pt-2">Username</label>
                            </div>
                            <div class="col">
                                <input type="text" name="username" placeholder="Username" class="form-control mb-3" required autofocus>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 text-end">
                                <label for="password" class="text-muted pt-2">Password</label>
                            </div>
                            <div class="col">
                                <input type="password" name="password" placeholder="Password" class="form-control mb-3">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col">
                                 <button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col">
                            <div class="text-center">
                            <button type="button" class="mt-3 btn btn-danger btn-sm w-75" 
                                          data-bs-toggle="modal" data-bs-target="#register">
                                         Create an Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    

<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <div class="card w-100 my-auto mx-auto border-0">
            <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center text-danger display-4 fw-bold">
            <i class="fa-solid fa-user-plus text-danger"></i>Registration</h1>
            </div>
            <div class="card-body">
                <form action="../actions/register.php" method="post">
                <div class="row mb-3">  
                        <div class="col">
                            <label for="first-name" class="form-label text-muted">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                        </div>

                        <div class="col">
                            <label for="last-name" class="form-label text-muted">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required>
                        </div>
                </div>  

                        <div class="mb-3">
                            <label for="username" class="form-label text-muted">Username</label>
                            <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label text-muted">Password</label>
                            <input type="password" name="password" id="password" class="form-control" minlength="8" aria-describedby="password-info" required>
                        </div>

                        <button type="submit" class="btn btn-danger w-100">Register</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>