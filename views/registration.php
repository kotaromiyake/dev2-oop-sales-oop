<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <div style="height: 100vh;">
     <div class="row h-100 m-o">
        <div class="card w-50 my-auto mx-auto border-0">
            <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center text-danger display-1 fw-bold">
            <i class="fa-solid fa-user-plus text-danger"></i>Registration</h1>
            </div>
            <div class="card-body">
                <form action="#" method="post">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>