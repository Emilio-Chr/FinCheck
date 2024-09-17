<?php
session_start();
require 'db_conexion.php';
if (isset($_POST['siguiente'])) 
{  
	$ingreso=$_POST['ingreso'];

	
	if (!empty($ingreso))	{
            $_SESSION['ingreso'] = $ingreso;
            header('location:05-registro-contraseña.php');	
	}  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/b1473ebfe8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="body-registrar">
<div class="container-form">
        <div class="content-form">
        <form method="post">
            <input class="input-form" type="text" name="ingreso" required>
            <i class="fa-solid fa-money-bill"></i>
            <label class="label-form">Ingreso</label>
            <button class="btn-form" type="submit" name="siguiente">siguente <i class="fa-solid fa-arrow-right"></i></button>
        </form>
        </div>
        <div class="animated-title-2">
        <h4 class="title-form">
            <h2>Ingresos</h2>
            <h5>Ingresa tu ingreso mensual aproximado.</h5>
            <a href="03-registro-celular.php" class="btn-regresar-form" type="submit" name="siguiente"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
        </div>
    </div>
</body>
</html>