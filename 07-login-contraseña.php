<?php
session_start();
require'cdn.html';
require'db_conexion.php';


if (isset($_POST['login-contraseña'])) {
$email = $_SESSION['email'];
$contraseña = $_POST['contraseña'];

	$select = $cnnPDO->prepare('SELECT * from registrar WHERE contraseña =? and email =?');
	
	$select->execute([$contraseña, $email]); 
	$count=$select->rowCount();
	$campo = $select->fetch();

	if($count)	{	
    $_SESSION['contraseña'] = $campo['contraseña'];

    header('location:08-navbar.php');
    
	}else{
        echo  ' <div class="alert alert-warning alert-dismissible fade show" role="alert">          
    <strong>REGISTRO</strong> LA CONTRASEÑA ES INCORRECTA
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b1473ebfe8.js" crossorigin="anonymous"></script>
</head>
<body class="body-registrar">
<div class="container-form">

        <div class="content-form">
        <form method="post">
            <input class="input-form" type="password" name="contraseña" required>
            <i class="fa-solid fa-lock"></i>
            <label class="label-form">Contraseña</label>
            <button class="btn-form" type="submit" name="login-contraseña">siguente</button>
        </form>
        </div>
        <div class="animated-title-2">
        <h4 class="title-form">
            <h2>Contraseña</h2>
            <h5>Ingrese Su Contraseña</h5>
            <a href="06-login-correo.php" class="btn-regresar-form" type="submit" name="siguiente"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
        </div>
    </div>
</body>
</html>