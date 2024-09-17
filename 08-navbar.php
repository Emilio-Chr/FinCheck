<?php session_start(); 
require'cdn.html'; 

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

<div class="navbar-user">
        <div class="logo-user">
        <a href="index.php">FinCheck</a>
        </div>
        <a class="iniciar-sesion-user">
        <p>Nombre: <?php echo$_SESSION['nombre'];?></p>
        </a> 
        <a href="09-editar-perfil.php" class="comenzar-user">
            <p>Editar Perfil</p>
        </a>
        <a href="index.php" class="cerrar-user">
            <p><i class="fa-solid fa-share-from-square"></i> Cerrar Sesión </p>
        </a>
    </div>


    <div class="container-vista-user">
    <div class="bienvenida">
    <h1>¡Bienvenido, <?php echo$_SESSION['nombre'];?>!</h1>
    <p>Gracias por registrarte en nuestro sistema. A continuación, te mostramos un resumen de tu información crediticia.</p>
    </div>
    <div class="resumen-perfil">
    <h2>Tu Resumen de Crédito</h2>
    <ul>
        <li><strong>Score de Crédito:</strong> 700</li>
        <li><strong>Consultas Recientes:</strong> 3</li>
        <li><strong>Recomendación:</strong> Mantén tu historial positivo durante los próximos meses.</li>
    </ul>
</div>
<div class="estado-reporte">
    <h2>Estado General del Crédito</h2>
    <div class="barra-estado">
        <div class="progreso" style="width: 75%;">Score: 700</div>
    </div>
</div>

<div class="recomendaciones">
    <h2>Recomendaciones Personalizadas</h2>
    <p>Tu score de crédito es positivo. Para mantenerlo, evita solicitar nuevos créditos en los próximos 6 meses.</p>
</div>


    </div>


</body>
</html>


