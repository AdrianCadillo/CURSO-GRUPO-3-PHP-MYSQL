<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-xl-5 col-lg-6 col-md-9 col-12">
            <div class="card border-primary ">
                <div class="card-header bg-transparent  ">
                    <h4>Login</h4>
                </div>
 
                <form action="../login.php" method="post">
                    <div class="card-body">
                       <div class="form-floating">
                       <input type="text" name="username" class="form-control form-control-lg mb-2"
                       placeholder="Username..." id="username"> 
                       <label for="username"><b class="text-primary">Username</b></label>
                       </div>

                       <div class="form-floating">
                       <input type="password" name="password" class="form-control form-control-lg"
                       placeholder="Password..." id="password"> 
                       <label for="password"><b>Password</b></label>
                       </div>

                       <label for"remember">Recordar mi sessión
                       <input type="checkbox" class="form-check-input me-1" name="remember" id="remember"> 
                       </label>
                    </div>

                    <div class="card-footer border-info">
                        <button class="btn btn-info bg-transparent" name="entrar"><b>Entrar <i class="fas fa-sign-in"></i></b></button>
                    </div>
                </form>
            </div>
            </div>
        </div> 
    </div> 
</body>
</html>

<?php 
 if(isset($_SESSION['username']) || isset($_COOKIE['remember']))
 {
    header("location:Dashboard.php");
 }
?>