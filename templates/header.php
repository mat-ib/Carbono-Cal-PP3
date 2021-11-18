<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="./favicon.ico">
    <script src="https://kit.fontawesome.com/41f5123b9c.js" crossorigin="anonymous"></script>
    <title>Huella de Carbono</title>
</head>

<body>
    <header>
        <div>
            <nav class="menu">
                <a href="./index.php"><img src="./img/logo.png" alt="logo" class="logo"></a>
                <ul class="menu_items">
                    <li><a href="./index.php">Inicio</a></li>
                    <li><a href="./quienes_somos.php">Quiénes somos</a></li>
                    <li><a href="./que_hacemos.php">Qué hacemos</a></li>
                    <li><a href="./socios.php">Socios</a></li>
                    <li><a href="./contacto.php">Contacto</a></li>
                    <!-- <li><a href="./ingresar_registrarse.php">Ingresar o Registrarse</a></li> -->
                    <li class="info_usuario">
                        <?php if (!empty($_SESSION)) :?>
                            <a href="#" class="perfil"><?php echo $_SESSION['nombre']; ?></a>
                            <ul id="nav-perfil">
                                <li><a href="./reportes.php">Reportes</a></li>
                                <li><a href="./cerrar.php">Salir</a></li>
                        <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>