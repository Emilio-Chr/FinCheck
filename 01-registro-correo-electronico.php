<?php
session_start();
require 'db_conexion.php';
if (isset($_POST['siguiente'])) 
{  
	$email=$_POST['email'];

	if (!empty($email))	{
            $sql = $cnnPDO->prepare('SELECT * FROM registrar WHERE email = ?');
            $sql->execute([$email]);
            $result = $sql->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">          
                <strong>Error:</strong> El correo electrónico ya está registrado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            } else {
                $_SESSION['email'] = $email;
                header('location:02-registro-nombre.php');
                exit(); 
            }
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
            <h2>¡Hola!</h2>
            <h5>Ingresa Un Correo Electronico Para Empezar</h5>
            <a href="index.php" class="btn-regresar-form" type="submit" name="siguiente"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
        </div>
        <div class="content-form">
        <form method="post">
            <input class="input-form" type="email" name="email" required>
            <i class="fa-solid fa-envelope"></i>
            <label class="label-form">email</label>
            <button class="btn-form" type="submit" name="siguiente">siguente <i class="fa-solid fa-arrow-right"></i></button>
        </form>
        </div>
    </div>
</body>
</html>