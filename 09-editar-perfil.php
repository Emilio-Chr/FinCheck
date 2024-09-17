<?php
session_start();
require'cdn.html';
require'db_conexion.php';

if (isset($_POST['actualizar'])) 
{  
    $email=$_SESSION['email'];
	$nombre=$_POST['nombre'];
	$celular=$_POST['celular'];
    $ingreso=$_POST['ingreso'];
	$contraseña=$_POST['contraseña'];

	if (!empty($email) && !empty($nombre) && !empty($celular) && !empty($ingreso) && !empty($contraseña))
	{   
		$sql = $cnnPDO->prepare(
			'UPDATE registrar SET nombre =?, celular =?, ingreso =?, contraseña =? WHERE email = ?'
		);
		$sql->execute([$nombre, $celular, $ingreso, $contraseña, $email]);
        $_SESSION['nombre'] = $nombre;
        $_SESSION['celular'] = $celular;
        $_SESSION['ingreso'] = $ingreso;
        
    ?>


    <div class="alert alert-warning alert-dismissible fade show bg-info" role="alert">
    <strong>Actualizado</strong> Sus datos fueron Actualizados.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php

		unset($sql);
		unset($cnnPDO);
        header("location:08-navbar.php");
	}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b1473ebfe8.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="body-index">
    <div class="container-editar">
    <h1>Editar Perfil</h1>

    <form action="" method="post">
    <div class="form-floating mb-3">
        <input type="email" class="input-form-editar"  name="email" required value="<?php echo$_SESSION['email'];?>">
        <label class="label-form">email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="input-form-editar"  name="nombre" required value="<?php echo$_SESSION['nombre'];?>">
        <label class="label-form">Nombre</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text"  class="input-form-editar"  name="celular" required value="<?php echo$_SESSION['celular'];?>">
        <label class="label-form">Celular</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text"  class="input-form-editar" name="ingreso" required value="<?php echo$_SESSION['ingreso'];?>">
        <label class="label-form">Ingresos</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="input-form-editar"  placeholder="email" name="contraseña" required  value="<?php echo$_SESSION['contraseña'];?>">
        <label class="label-form">Contraseña</label>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
    <button name="actualizar" class="btn-form" type="submit"><i class="fa-solid fa-pen-nib"></i> Actualizar</button>
    </div>
    <a href="08-navbar.php" class="btn-regresar-form" type="submit" name="siguiente"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
    </div>
    </form>
    </div>
</body>
</html>


