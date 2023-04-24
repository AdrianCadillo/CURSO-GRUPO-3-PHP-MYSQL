<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape HTML</title>
</head>
<body>
    <?php $login =false?>
    
    <?php if(!$login):?>
    <h1>Login</h1>
    <?php endif;?>

    <?php if($login):?>
    <h1>Usuario</h1>
    <?php endif;?>

    
</body>
</html>