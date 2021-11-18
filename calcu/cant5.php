<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["transporte_publico"] = $_POST["transporte_publico"];

?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">Ingrese la cantidad de km. recorridos anuales</p>

    <form action="pregunta-7.php" method="POST" class="form-calc">
        <input type="number" name="cant5_3" placeholder="Distancia recorrida" min="0" class="form-control">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
    <img src="../img/publico.jpg" alt="imagen">
</main>