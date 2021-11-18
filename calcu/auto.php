<?php
session_start();
require("../templates/header_cal.php");
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">¿Qué combustible usa su vehículo o flota de vehículos?</p>

    <form action="cant4.php" method="POST" class="form-calc">
         <select name="tipo_auto" class="form-control">
            <option selected>Seleccioná una opción de combustible...</option>
            <option value="1">GNC</option>
            <option value="2">Nafta</option>
            <option value="3">Gasoil</option>
            <option value="4">Es motocicleta</option>
        </select>
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>s
</main>