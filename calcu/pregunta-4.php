<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["cant2"] = $_POST["cant2"];
$_SESSION["cant2_2"] = $_POST["cant2_2"];
?>

<main>
    <h1>Pregunta 4 de 7</h1>
    <p class="calc-text">Tipo de calefacción</p>

    <form action="cant3.php" method="POST" class="form-calc">
        <select name="calefaccion" class="form-control">
            <option selected>Seleccioná un tipo de calefacción...</option>
            <option value="1">GAS</option>
            <option value="2">Electrica</option>
            <option value="3">Leña</option>
        </select>
        <button type="submit" class="btn btn-primary">Siguiente</button>
    </form>
    <img src="../img/calefaccion.jpg" alt="imagen">
</main>