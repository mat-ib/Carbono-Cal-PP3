<?php
session_start();
require("../templates/header_cal.php");

if(isset($_POST["tipo_incandesente"])){
    $_SESSION["tipo_incandesente"] = $_POST["tipo_incandesente"];
    //$VACIO = $_POST["gas"];
  }
  else{
    unset($_POST["tipo_incandesente"]);
  }
  if(isset($_POST["bajo_consumo"])){
    $_SESSION["bajo_consumo"] = $_POST["bajo_consumo"];
    //$VACIO = $_POST["electrico"];
  }
  else{
    unset($_POST["bajo_consumo"]);
  }
  if(isset($_POST["led"])){
    $_SESSION["led"] = $_POST["led"];
    //$VACIO = $_POST["leña"];
  }
  else{
    unset($_POST["led"]);
  }
  if(isset($_POST["fluosrecente"])){
    $_SESSION["fluosrecente"] = $_POST["fluosrecente"];
    //$VACIO = $_POST["leña"];
  }
  else{
    unset($_POST["fluosrecente"]);
  }
  if(isset($_POST["tubo_led"])){
    $_SESSION["tubo_led"] = $_POST["tubo_led"];
    //$VACIO = $_POST["leña"];
  }
  else{
    unset($_POST["tubo_led"]);
  }
?>

<main>
    <h1>Pregunta # de #</h1>
    <p class="calc-text">Ingresar la cantidad de horas que las utiliza por día y la cantidad de laparas</p>

    <form action="pregunta-4.php" method="POST" class="form-calc">
        <input type="number" name="cant2" placeholder="Ingresa la cantiadad de horas" min="0" class="form-control">
        <input type="number" name="cant2_2" placeholder="Ingresa la cantiadad de lamparas" min="0" class="form-control">
        <button type="submit" class="btn btn-primary">Siguiente</button>
    </form>s
</main>