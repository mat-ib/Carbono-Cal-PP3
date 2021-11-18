<?php
session_start();

require("./funciones.php");
require("./clases/clases.php");

$error = "";
if (isset($_POST['acceder'])) {
    $pass = hash('sha512', $_POST['pass']);
    $datos = array($_POST['email'], $pass);

    if (datos_vacios($datos) == false) {
        $datos = limpiar($datos);
        // foreach ($datos as $dato) {
        //     echo $dato . "<br>";
        // }
        if (strpos($datos[0], " ") == false) {
            $resultados = (new usuarios)->verificar($datos[0]);
            if (empty($resultados) == false) {
                if ($datos[1] == $resultados[0]["contrasena"]) {
                    $_SESSION['CodUsua'] = $resultados[0]["IDDeUsuario"];
                    $_SESSION['nombre'] = $resultados[0]["Nombre"];
                    $_SESSION['apellido'] = $resultados[0]["Apellido"];
                    header('location: index.php');
                } else {
                    $error = "Error: la contraseña es incorrecta";
                }
            } else {
                $error = "Error: el correo y/o la contraseña son incorrectos";
            }
        }
    } else {
        $error = "Error: el ingreso no se pudo realizar porque hay campos vacíos";
    }
}

require("./templates/header_log.php");

?>

<main>
    <h2>¡Ingresá a tu cuenta!</h2>
    <p>
        Completá con tus datos de usuario para poder acceder nuevamente.
    </p>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <!-- <label for="user_name">Ingresa tu email:</label> -->
            <input type="text" name="email" placeholder="Ingresá tu correo electrónico:" class="form-control">

            <!-- <label for="pass">Contraseña:</label> -->
            <input type="password" name="pass" placeholder="Ingresá tu contraseña:" class="form-control">

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary" name="acceder">Ingresar</button>
            </div>
            
            <?php if (!empty($error)) : ?>
                <p class="bad"><?php echo $error; ?></p>
            <?php endif; ?>
        </form>
    </div>
</main>

<?php

require("./templates/footer.php");

?>