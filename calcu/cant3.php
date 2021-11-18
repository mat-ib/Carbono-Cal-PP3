<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["calefaccion"] = $_POST["calefaccion"];

?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">Ingresar la cantidad de horas que las utiliza por día</p>

    <form action="pregunta-5.php" method="POST" class="form-calc">
        <input type="number" name="cant3" placeholder="Ingresa la cantiadad de horas" min="1" max="24" class="form-control">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>s
</main>