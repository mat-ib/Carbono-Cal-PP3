<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["tipo_auto"] = $_POST["tipo_auto"];
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">Ingresá un estimado en kilometros recorridos al año y consumo cada 100km</p>

    <form action="pregunta-7.php" method="POST" class="form-calc">
        <input type="number" name="cant5" placeholder="Distancia recorrida" min="0" class="form-control">
        <input type="number" name="cant5_2" placeholder="Litros cada 100km" min="0" class="form-control">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
</main>