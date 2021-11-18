<?php
require("../templates/header_cal.php");
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">¿Cuantos Watts consumen sus lamparas?</p>

    <form action="cant2.php" method="POST" class="form-calc">
        <select name="bajo_consumo" class="form-control">
            <option selected>Seleccioná potencia del artefacto...</option>
            <option value="8">8W</option>
            <option value="12">12W</option>
            <option value="15">15W</option>
            <option value="20">20W</option>
            <option value="23">23W</option>
        </select>
        <button name="bajo_consumo" type="submit" class="btn btn-primary">Siguiente</button>
    </form>
    <img src="../img/bajo-consumo.jpg" alt="imagen">
</main>