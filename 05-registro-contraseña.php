<?php
session_start();
require 'db_conexion.php';
if (isset($_POST['registrar'])) 
{  
	$email=$_SESSION['email'];
	$nombre=$_SESSION['nombre'];
	$celular=$_SESSION['celular'];
	$ingreso=$_SESSION['ingreso'];
    $contraseña=$_POST['contraseña'];
	
	if (!empty($email) && !empty($nombre) && !empty($celular) && !empty($ingreso)&& !empty($contraseña))	{

			$sql=$cnnPDO->prepare("INSERT INTO registrar
			(email, nombre, celular, ingreso, contraseña) VALUES (?, ?, ?, ?, ?)");
            $sql->execute([$email, $nombre, $celular, $ingreso, $contraseña]);
			unset($sql);
			unset($cnnPDO);
            ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">          
            <strong>REGISTRO</strong> SUS DATOS FUERON ENVIADOS
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php		
            header("location:06-login-correo.php");
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
<div class="animated-title">
        <h4 class="title-form">
            <h2>Contraseña</h2>
            <h5>Crea una contraseña segura.</h5>
            <a href="04-registro-ingreso.php" class="btn-regresar-form" type="submit" name="siguiente"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
        </div>
        <div class="content-form">
        <form method="post">
            <input class="input-form" type="password" name="contraseña" required>
            <i class="fa-solid fa-lock"></i>
            <label class="label-form">Contraseña</label>
            <button class="btn-form" type="submit" name="registrar"><i class="fa-solid fa-arrow-left"></i> siguente</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>