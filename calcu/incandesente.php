<?php
require("../templates/header_cal.php");
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">¿Cuantos Watts consumen sus lamparas?</p>

    <form action="cant2.php" method="POST" class="form-calc">
        <select name="tipo_incandesente" class="form-control">
            <option selected>Seleccioná potencia del artefacto...</option>
            <option value="20">20W</option>
            <option value="40">40W</option>
            <option value="60">60W</option>
            <option value="75">75W</option>
            <option value="100">100W</option>
        </select>
        <button name="tipo_incandesente" type="submit" class="btn btn-primary">Siguiente</button>
    </form>
    <img src="../img/incandecente.png" alt="imagen">
</main>