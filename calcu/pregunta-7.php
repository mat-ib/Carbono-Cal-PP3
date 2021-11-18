<?php
session_start();
require("../templates/header_cal.php");

if(isset($_POST["cant5_3"])){
  $_SESSION["cant5_3"] = $_POST["cant5_3"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_POST["cant5_3"]);
}
if(isset($_POST["cant5"])){
  $_SESSION["cant5"] = $_POST["cant5"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_POST["cant5"]);
}
if(isset($_POST["cant5_2"])){
  $_SESSION["cant5_2"] = $_POST["cant5_2"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_POST["cant5_2"]);
}
?>

<main>
    <h1>Pregunta 7 de 7</h1>
    <p class="calc-text">¿Cuantas veces viajas en avion al año pasado y cuantos kilometros recorriste aproximadamente?</p>

    <form action="finalizar.php" method="POST" class="form-calc">
        <input type="number" name="cantidad6" placeholder="Ingresa la cantidad de viajes:" min="0" class="form-control">
        <input type="number" name="kilometros6" placeholder="Ingresa un estimado de kilometro recorridos:" min="0" class="form-control">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
    <img src="../img/avion.jpg" alt="imagen">
</main>