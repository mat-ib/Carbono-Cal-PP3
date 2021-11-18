<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["artefacto"] = $_POST["artefacto"];

?>

<main>
    <h1>Pregunta 2 de 7</h1>
    <p class="calc-text">¿Cuantas horas se usa por día?</p>

    <form action="./pregunta-3.php" method="POST" class="form-calc">
        <input type="number" name="cantidad1" placeholder="Ingresa la cantidad de horas" min="0" max="24" class="form-control">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
    <img src="../img/artefactos-image.jpg" alt="imagen">
</main>