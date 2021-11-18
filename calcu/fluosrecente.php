<?php
require("../templates/header_cal.php");
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">¿Cuantos Watts consumen sus lamparas?</p>

    <form action="cant2.php" method="POST" class="form-calc">
        <select name="fluosrecente" class="form-control">
            <option selected>Seleccioná potencia del artefacto...</option>
            <option value="18">18W</option>
            <option value="30">30W</option>
            <option value="36">36W</option>
            <option value="58">58W</option>
        </select>
        <button name="fluosrecente" type="submit" class="btn btn-primary">Siguiente</button>
    </form>
    <img src="../img/fluorescente.jpg" alt="imagen">
</main>