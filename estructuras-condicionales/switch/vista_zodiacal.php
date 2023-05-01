<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiacal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-xl-5 col-lg-6 col-md-9 col-12">
            <div class="card border-info">
                <div class="card-header bg bg-info text-white">
                    <h4>Aplicación Zodiacal</h4>
                </div>

                <form action="proceso_zodiacal.php" method="post">
                    <div class="card-body">

                    <div class="m-2">
                    <?php 
                    if(isset($_SESSION['error'])):
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php 
                          foreach($_SESSION['error'] as $error):
                        ?>   

                         <li><strong><?php echo $error;?></strong></li>
                        <?php endforeach;?>
                        </div>
                           
                    <?php unset($_SESSION['error']); endif;?> 
                    </div> 
                       <input type="text" name="persona" class="form-control form-control-lg mb-2"
                       placeholder="Nombre de la persona..."> 

                       <input type="date" name="fecha" class="form-control form-control-lg"> 

                        
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-info" name="procesar"><b>Averiguar <i class="fas fa-save"></i></b></button>
                    <div class="m-2">
                        <?php 
                        if(isset($_SESSION['response'])):
                        ?>
                           <div class="alert alert-success" role="alert">
                            <strong><?php echo $_SESSION['response'];?></strong> 
                           </div>
                           
                        <?php unset($_SESSION['response']); endif;?>
                    </div>
                    </div>
                </form>
            </div>
            </div>
        </div> 
    </div> 
</body>
</html>