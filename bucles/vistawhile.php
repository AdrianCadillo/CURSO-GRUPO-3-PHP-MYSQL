<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero de la suerte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
  <div class="container mt-2">
    <div class="card">
        <div class="card-header">
            <h4>Número de la suerte</h4>
        </div>

        <form action="while.php" method="post">
            <div class="card-body">
             <input type="date" name="fecha" class="form-control">
            </div>

            <div class="card-footer">
                <button class="btn btn-success" name="suerte">cancular número de la suerte</button>
            </div>
        </form>
    </div> 
  </div>
</body>
</html>