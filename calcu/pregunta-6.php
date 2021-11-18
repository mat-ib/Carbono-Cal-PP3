<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["ventilador"] = $_POST["ventilador"];
$_SESSION["aire_condicionado"] = $_POST["aire_condicionado"];


if(isset($_POST["ventilador"])){
  $_SESSION["ventilador"] = $_POST["ventilador"];
}
else{
  unset($_POST["ventilador"]);
}
if(isset($_POST["aire_condicionado"])){
  $_SESSION["aire_condicionado"] = $_POST["aire_condicionado"];
}
else{
  unset($_POST["aire_condicionado"]);
}
?>

<main>
    <h1>Pregunta 6 de 7</h1>
    <p class="calc-text">¿Qué transporte usas para desplazarte?</p>

    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-info" href="auto.php">Auto</a>
        <a class="btn btn-info" href="transporte_publico.php">Transporte Publico</a>
    </div>
    <br>
    <img src="../img/transporte.jpg" alt="imagen">
</main>