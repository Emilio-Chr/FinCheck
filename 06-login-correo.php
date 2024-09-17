<?php
session_start();
require'cdn.html';
require'db_conexion.php';


if (isset($_POST['login-email'])) {
$email = $_POST['email'];

	$select = $cnnPDO->prepare('SELECT * from registrar WHERE email =? ');
	
	$select->execute([$email]); 
	$count=$select->rowCount();
	$campo = $select->fetch();

	if($count)	{	
    $_SESSION['email'] = $campo['email'];
    $_SESSION['nombre'] = $campo['nombre'];
    $_SESSION['celular'] = $campo['celular'];
    $_SESSION['ingreso'] = $campo['ingreso'];
    

    header('location:07-login-contraseña.php');

	}else{
        echo  ' <div class="alert alert-warning alert-dismissible fade show" role="alert">          
    <strong>REGISTRO</strong> EL CORREO NO EXISTE
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
    <div class="animated-title">
        <h4 class="title-form">
        <h2 class="title-for"> Login</h2>
        <h5 class="title-form"> Ingrese su Correo Electronico</h5>
        <a href="index.php" class="btn-regresar-form" type="submit" name="siguiente"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
        </div>

        <div class="content-form">
        <form method="post">
            <input class="input-form" type="email" name="email" required>
            <i class="fa-solid fa-envelope"></i>
            <label class="label-form">email</label>
            <button class="btn-form" type="submit" name="login-email">siguente</button>
        </form>
        </div>
    </div>
</body>
</html>