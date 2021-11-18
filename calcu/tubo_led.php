<?php
require("../templates/header_cal.php");
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">¿Cuantos Watts consumen sus lamparas?</p>

    <form action="cant2.php" method="POST" class="form-calc">
        <select name="tubo_led" class="form-control">
            <option selected>Seleccioná potencia del artefacto...</option>
            <option value="9">9W</option>
            <option value="14">14W</option>
            <option value="18">18W</option>
            <option value="25">25W</option>
        </select>
        <button name="tubo_led" type="submit" class="btn btn-primary">Siguiente</button>
    </form>
    <img src="../img/tubos-led.jpg" alt="imagen">
</main>