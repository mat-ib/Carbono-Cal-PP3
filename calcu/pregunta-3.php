<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["cantidad1"] = $_POST["cantidad1"];
?>

<main>
    <h1>Pregunta 3 de 7</h1>
    <p class="calc-text">¿Qué tipos de lamparas tiene mayormente en su casa u oficina?</p>

    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-info" href="incandesente.php">Incandesente</a>
        <a class="btn btn-info" href="bajo_consumo.php">Bajo Consumo</a>
        <a class="btn btn-info" href="led.php">Led</a>
        <a class="btn btn-info" href="fluosrecente.php">Tubo Fluosrecente</a>
        <a class="btn btn-info" href="tubo_led.php">Tubo Led</a>
    </div>
    <br>
    <img src="../img/tipos-de-lamparas.jpg" alt="imagen">
</main>
