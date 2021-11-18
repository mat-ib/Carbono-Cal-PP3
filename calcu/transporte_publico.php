<?php
require("../templates/header_cal.php");
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">¿Qué transporte publico usa mas?</p>

    <form action="cant5.php" method="POST" class="form-calc">
         <select name="transporte_publico" class="form-control">
            <option selected>Seleccioná una opción de transporte...</option>
            <option value="1">Colectivo</option>
            <option value="2">Combi</option>
        </select>
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
    <img src="../img/publico.jpg" alt="imagen">
</main>