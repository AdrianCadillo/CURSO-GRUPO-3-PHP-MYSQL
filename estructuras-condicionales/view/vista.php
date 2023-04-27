<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
       <div class="row">
         <div class="col-xl-5 col-lg-6 col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ejercicio1</h4>
                </div>
                <form action="../proceso.php" method="post">
                   <div class="card-body">
                   <input type="text" name="cliente" class="form-control form-control-lg mb-2"
                   placeholder="Ingrese cliente....">

                   <select name="cargo" class="form-control mb-2">
                   <option> -- Seleccione -- </option>
                   <option value="Ing.sistemas"> Ing.sistemas </option>
                   <option value="Administrador"> Administrador </option>
                   <option value="Contador"> Contador </option>
                   <option value="Programador"> Programador </option>
                   </select>
                   <input type="text" name="salario" class="form-control form-control-lg"
                   placeholder="Ingrese salario....">
                   </div>
                   <div class="m-3">
                     <?php 
                     if(isset($_SESSION['responses'])):
                     ?>
                      <div class="alert alert-primary" role="alert">
                       <?php echo $_SESSION['responses']?>
                     </div>
                     <?php endif;?>
                   </div>
                   <div class="card-footer">
                    <button class="btn btn-primary" name="procesar">Calcular</button>
                   </div>
                </form>
            </div>
            
         </div>
       </div>
    </div>
</body>
</html>
