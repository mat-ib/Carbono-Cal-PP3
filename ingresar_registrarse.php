<?php
require("./funciones.php");
require("./clases/clases.php");

$error = "";
$exito = "";
$done = FALSE;

if (isset($_POST['registrar'])) {
    $contra = hash('sha512', $_POST['password']);
    $datos = array(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['country'],
        $_POST['state'],
        $_POST['city'],
        $_POST['social'],
        $_POST['typeus'],
        $_POST['email'],
        $contra
    );

    if (datos_vacios($datos) == false) {
        $datos = limpiar($datos);
        // foreach ($datos as $dato) {
        //     echo $dato . "<br>";
        // }
        if (strpos($datos[7], " ") == false) {
            if (empty((new usuarios)->verificar($datos[7]))) {
                (new usuarios)->registrar($datos);
                $done = TRUE;
                $exito = "¡El registro se completo con éxito!";
            } else {
                $error = "Error: el mail ingresado ya se encuentra registrado";
            }
        }
    } else {
        $error = "Error: el registro no se pudo completar porque hay campos vacíos";
    }
}

require("./templates/header_log.php");

?>

<main>
    
    <div class="form-singup-main">
        <div class="container-1">
            <h2>¡Registráte, es gratis!</h2>
            <h4>Completá todos los campos para crear una cuenta nueva.</h4>
            <br>
            <p>
            Entra y conoce de que se trata la huella de carbono y como perjudica el medio ambiente.
            </p>
            <br>
            <p>
            Entérate de quienes somos y que es lo que hacemos para cuidar el planeta.
            </p>
            <br>
            <p>
            Descubrí quienes son nuestros principales socios con los que trabajamos para concretar este proyecto.
            </p>
            <br>
            <p>
            Anímate a calcular tu huella de carbono y encontrar la forma de mitigarla y contrarrestarla por medio de plantación de árboles.
            </p>
        </div>
        <div class="container-2">
            <form id="singup" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <!-- <label for="name">Ingresá tu nombre:</label> -->
                <input type="text" name="firstname" placeholder="Ingresá tu nombre:" class="form-control">

                <!-- <label for="lastname">Ingresá tu apellido:</label> -->
                <input type="text" name="lastname" placeholder="Ingresá tu apellido:" class="form-control">

                <!-- <label for="">Seleccioná tu país:</label> -->
                <select name="country" id="" class="form-control">
                    <option selected>Seleccioná tu país</option>
                    <option value="1">Argentina</option>
                    <option value="2">Brasil</option>
                    <option value="3">Uruguay</option>
                </select>

                <!-- <label for="state">Seleccioná tu provincia:</label> -->
                <input type="text" name="state" placeholder="Ingresá una provincia:" class="form-control">

                <!-- <label for="city">Seleccioná tu ciudad:</label> -->
                <input type="text" name="city" placeholder="Ingresá una ciudad:" class="form-control">

                <!-- <label for="social">Razón social:</label> -->
                <input type="text" name="social" placeholder="Razón social:" class="form-control">

                <!-- <label for="social">Seleccioná qué tipo de usuario sos:</label> -->
                <select name="typeus" id="" class="form-control">
                    <option selected>Seleccioná un tipo de usuario</option>
                    <option value="1">Individuo</option>
                    <option value="2">Corporativo</option>
                </select>

                <!-- <label for="uname">Ingresá tu correo electrónico:</label> -->
                <input type="text" name="email" placeholder="Ingresá tu correo electrónico:" class="form-control">

                <!-- <label for="pass">Ingresá una contraseña:</label> -->
                <input type="password" name="password" placeholder="Ingresá una contraseña:" class="form-control">

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary" name="registrar">Completar registro</button>
                    <a class="btn btn-warning" href="./ingresar.php" role="button">¿Estás registrado?, ingresá</a>
                </div>

                <?php if (!empty($error)) : ?>
                    <p class="bad"><?php echo $error; ?></p>
                <?php endif; ?>

                <?php if ($done) : ?>
                    <p class="ok"><?php echo $exito; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</main>

<?php

require("./templates/footer.php");

?>