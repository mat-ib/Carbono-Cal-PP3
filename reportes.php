<?php
require("./sesion.php");
require("./templates/header.php");
?>

<main>

    <h1>Tu historial en CarbonoCal</h1>

    <p>
        Elegi una de las opciones para genera un reporte de tus donaciones y huella de carbono.
    </p>
    
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-info" href="./reporte_donaciones.php">Historial de Donaciones</a>
        <a class="btn btn-info" href="./reporte_calculadora.php">Historial Huella de Carbono</a>
    </div>
    <br>
    <br>
    <img src="./img/registro.jpg" alt="imagen">
</main>