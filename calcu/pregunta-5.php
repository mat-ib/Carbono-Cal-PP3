<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["cant3"] = $_POST["cant3"];
?>

<main>
    <h1>Pregunta 5 de 7</h1>
    <p class="calc-text">Completar las horas de uso promedio dependiendo el artefacto que usa para refrigerar su casa u oficina.</p>

    <form action="pregunta-6.php" method="POST" class="form-calc">
        <input type="number" name="ventilador" placeholder="Ventilador:" min="0" class="form-control">
        <input type="number" name="aire_condicionado" placeholder="Aire acondiscionado:" min="0" class="form-control">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
    <img src="../img/refrigeracion.jpg" alt="imagen">
</main>