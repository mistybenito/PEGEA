<?php
session_start()
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>PHP Firebase</title>
  </head>
  <body>

    <?php
    include('navbar.php');
    ?>

  <div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5 class= 'alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }

                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Register
                            <a href="index.php" class="btn btn-danger float-end"> BACK </a>
                        </h4>
                    </div>
                    <div class="card-body">
                       <form action="code.php" method="POST">

                       <div class="form-group mb-3">
                        <label for="">Full Name</label>
                        <input type="text" name="Name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Phone Number</label>
                        <input type="text" name="Contact_number" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Address</label>
                        <input type="text" name="Address" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Birthday</label>
                        <input type="text" name="Birthday" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Mother's Name</label>
                        <input type="text" name="Mother" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Mother Contact Number</label>
                        <input type="text" name="Mother_number" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Father's Name</label>
                        <input type="text" name="Father" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Father's Contact Number</label>
                        <input type="text" name="Father_number" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Email Address</label>
                        <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <button type="submit" name="register_btn" class="btn btn-primary"> Register </button>
                        </div>

                       </form> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
    