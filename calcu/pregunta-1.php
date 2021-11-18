<?php
require("../templates/header_cal.php");
?>

<main>
    <h1>Pregunta 1 de 7</h1>
    <p class="calc-text">Selecioná el artegacto que mas usás en casa o los mas usasdos en la compañia.</p>

    <form action="./pregunta-2.php" method="POST" class="form-calc">
        <select name="artefacto" class="form-control">
            <option selected>Seleccioná un tipo de artefacto...</option>
            <option value="1">PC de escritorio</option>
            <option value="2">PC portatil</option>
            <option value="3">Radio</option>
            <option value="4">Microondas</option>
            <option value="5">Pava electrica</option>
        </select>
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
    <img src="../img/artefactos-image.jpg" alt="imagen">
</main>
