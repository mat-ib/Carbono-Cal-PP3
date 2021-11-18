<?php
require("../templates/header_cal.php");
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">¿Cuantos Watts consumen sus lamparas?</p>

    <form action="cant2.php" method="POST" class="form-calc">
        <select name="led" class="form-control">
            <option selected>Seleccioná potencia del artefacto...</option>
            <option value="4">4W</option>
            <option value="6">6W</option>
            <option value="9">9W</option>
            <option value="11">11W</option>
            <option value="15">15W</option>
        </select>
        <button name="led" type="submit" class="btn btn-primary">Siguiente</button>
    </form>
    <img src="../img/led.jpg" alt="imagen">
</main>