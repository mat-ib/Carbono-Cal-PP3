<?php
session_start();
require("../templates/header_cal.php");

$_SESSION["cantidad6"] = $_POST["cantidad6"];
$_SESSION["kilometros6"] = $_POST["kilometros6"];

$CARBONO1 = 0;
$CARBONO2 = 0;
$CARBONO3 = 0;
$CARBONO4 = 0;
$CARBONO5 = 0;
$CARBONO6 = 0;
$CARBONO7 = 0;
$CARBONO8 = 0;
$CARBONO9 = 0;
$CARBONO10 = 0;
$CARBONO11 = 0;
$CARBONO12 = 0;
$CARBONO13 = 0;
$CARBONO_ARBOL = 0;
$LEÑA = 0;
$ELECTRICO = 0;
$GAS = 0;
$CANT5_2 = 0;
$CANT5_3 = 0;
$CANT5 = 0;
$CANT2_2 = 0;
$CANT3= 0;
$tipo_calefaccion=0;
$tipo_artefacto =0;
$Huellacarbono="MEDIO";
$ARTEFACTO = 0;
$TRANSPORTE_PUBLICO = 0;
$AUTO = 0;
$TUBO_LED = 0;
$FLUOSRECENTE = 0;
$LED = 0;
$BAJO_CONSUMO = 0;
$TIPO_INCANDESENTE = 0;


if(isset($_SESSION["gas"])){
  $GAS = $_SESSION["gas"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["gas"]);
}
if(isset($_SESSION["electrico"])){
  $ELECTRICO = $_SESSION["electrico"];
  //$VACIO = $_POST["electrico"];
}
else{
  unset($_SESSION["electrico"]);
}
if(isset($_SESSION["leña"])){
  $LEÑA = $_SESSION["leña"];
  //$VACIO = $_POST["leña"];
}
else{
  unset($_SESSION["leña"]);
}

if(isset($_SESSION["transporte_publico"])){
  $TRANSPORTE_PUBLICO = $_SESSION["transporte_publico"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["transporte_publico"]);
}
if(isset($_SESSION["tipo_auto"])){
  $TIPO_AUTO = $_SESSION["tipo_auto"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["tipo_auto"]);
}
if(isset($_SESSION["ventilador"])){
  $VENTILADOR = $_SESSION["ventilador"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["ventilador"]);
}
if(isset($_SESSION["aire_condicionado"])){
  $AIRE_CONDICIONADO = $_SESSION["aire_condicionado"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["aire_condicionado"]);
}
if(isset($_SESSION["tipo_incandesente"])){
  $TIPO_INCANDESENTE = $_SESSION["tipo_incandesente"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["tipo_incandesente"]);
}
if(isset($_SESSION["bajo_consumo"])){
  $BAJO_CONSUMO = $_SESSION["bajo_consumo"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["bajo_consumo"]);
}
if(isset($_SESSION["led"])){
  $LED = $_SESSION["led"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["led"]);
}
if(isset($_SESSION["fluosrecente"])){
  $FLUOSRECENTE = $_SESSION["fluosrecente"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["fluosrecente"]);
}
if(isset($_SESSION["tubo_led"])){
  $TUBO_LED = $_SESSION["tubo_led"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["tubo_led"]);
}

if(isset($_POST["transporte_publico"])){
  $_SESSION["transporte_publico"] = $_POST["transporte_publico"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_POST["transporte_publico"]);
}
if(isset($_POST["tipo_auto"])){
  $_SESSION["tipo_auto"] = $_POST["tipo_auto"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_POST["tipo_auto"]);
}

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
if(isset( $_SESSION["cant5"])){
  $CANT5 = $_SESSION["cant5"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["cant5"]);
}
if(isset( $_SESSION["cant5_2"])){
  $CANT5_2 = $_SESSION["cant5_2"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["cant5"]);
}
if(isset( $_SESSION["cant5_3"])){
  $CANT5_3 = $_SESSION["cant5_3"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["cant5_3"]);
}
if(isset( $_SESSION["tipo_auto"])){
  $AUTO = $_SESSION["tipo_auto"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["tipo_auto"]);
}
if(isset( $_SESSION["transporte_publico"])){
  $TRANSPORTE_PUBLICO = $_SESSION["transporte_publico"];
  //$VACIO = $_POST["gas"];
}
else{
  unset($_SESSION["transporte_publico"]);
}

$ARTEFACTO = $_SESSION["artefacto"];
$CANTIDAD1 = $_SESSION["cantidad1"];
$CANTIDAD6 = $_SESSION["cantidad6"];
$KILOMETROS6 = $_SESSION["kilometros6"];
$CANTIDAD2 = $_SESSION["cant2"];
$CANTIDAD2_2 = $_SESSION["cant2_2"];
$CANT3 = $_SESSION["cant3"];
$tipo_calefaccion = $_SESSION["calefaccion"];

if($tipo_calefaccion == 1){
  $CARBONO3 = (($CANT3 * 0.32) * 365) * 1.95;
}
if($tipo_calefaccion == 2){
  $CARBONO3 = (($CANT3 * 2) * 365) * 0.486;
}
if($tipo_calefaccion == 3){
  $CARBONO3 = (($CANT3 * 2.5) * 365) * 1.63;
}

if($ARTEFACTO == 1){
  $CARBONO1 = (($CANTIDAD1 * 0.72) * 365) * 0.486;
  $tipo_artefacto = "PC de escritorio";
}
if($ARTEFACTO == 2){
  $CARBONO1 = (($CANTIDAD1 * 0.22) * 365) * 0.486;
  $tipo_artefacto = "PC Portatil";
}
if($ARTEFACTO == 3){
  $CARBONO1 = (($CANTIDAD1 * 0.06) * 365) * 0.486;
  $tipo_artefacto = "Radio";
}
if($ARTEFACTO == 4){
  $CARBONO1 = ((($CANTIDAD1 / 60) * 0.72) * 365) * 0.486;
  $tipo_artefacto = "Microondas";
}
if($ARTEFACTO == 5){
  $CARBONO1 = ((($CANTIDAD1 / 60) * 0.72) * 365) * 0.486;
  $tipo_artefacto = "Pava electrica";
}

if($TIPO_INCANDESENTE == 20){
  $CARBONO2 = (($CANTIDAD2 * 0.02) * 365) * 0.486;
}
if($TIPO_INCANDESENTE == 40){
  $CARBONO2 = (($CANTIDAD2 * 0.04) * 365) * 0.486;
}
if($TIPO_INCANDESENTE == 60){
  $CARBONO2 = (($CANTIDAD2 * 0.06) * 365) * 0.486;
}
if($TIPO_INCANDESENTE == 75){
  $CARBONO2 = (($CANTIDAD2 * 0.075) * 365) * 0.486;
}
if($TIPO_INCANDESENTE == 100){
  $CARBONO2 = (($CANTIDAD2 * 0.1) * 365) * 0.486;
}

if($BAJO_CONSUMO == 8){
  $CARBONO2 = (($CANTIDAD2 * 0.008) * 365) * 0.486;
}
if($BAJO_CONSUMO == 12){
  $CARBONO2 = (($CANTIDAD2 * 0.012) * 365) * 0.486;
}
if($BAJO_CONSUMO == 15){
  $CARBONO2 = (($CANTIDAD2 * 0.015) * 365) * 0.486;
}
if($BAJO_CONSUMO == 20){
  $CARBONO2 = (($CANTIDAD2 * 0.02) * 365) * 0.486;
}
if($BAJO_CONSUMO == 23){
  $CARBONO2 = (($CANTIDAD2 * 0.023) * 365) * 0.486;
}

if($LED == 4){
  $CARBONO2 = (($CANTIDAD2 * 0.004) * 365) * 0.486;
}
if($LED == 6){
  $CARBONO2 = (($CANTIDAD2 * 0.006) * 365) * 0.486;
}
if($LED == 2){
  $CARBONO2 = (($CANTIDAD2 * 0.009) * 365) * 0.486;
}
if($LED == 11){
  $CARBONO2 = (($CANTIDAD2 * 0.011) * 365) * 0.486;
}
if($LED == 15){
  $CARBONO2 = (($CANTIDAD2 * 0.015) * 365) * 0.486;
}

if($FLUOSRECENTE == 1){
  $CARBONO2 = (($CANTIDAD2 * 0.018) * 365) * 0.486;
}
if($FLUOSRECENTE == 30){
  $CARBONO2 = (($CANTIDAD2 * 0.03) * 365) * 0.486;
}
if($FLUOSRECENTE == 36){
  $CARBONO2 = (($CANTIDAD2 * 0.036) * 365) * 0.486;
}
if($FLUOSRECENTE == 58){
  $CARBONO2 = (($CANTIDAD2 * 0.058) * 365) * 0.486;
}

if($TUBO_LED == 3){
  $CARBONO2 = (($CANTIDAD2 * 0.009) * 365) * 0.486;
}
if($TUBO_LED == 14){
  $CARBONO2 = (($CANTIDAD2 * 0.014) * 365) * 0.486;
}
if($TUBO_LED == 4){
  $CARBONO2 = (($CANTIDAD2 * 0.018) * 365) * 0.486;
}
if($TUBO_LED == 25){
  $CARBONO2 = (($CANTIDAD2 * 0.025) * 365) * 0.486;
}

if($AUTO == 1){
  $CARBONO8 = (($CANT5 * $CANT5_2)/100) * 1.95;
}
if($AUTO == 2){
  $CARBONO8 = (($CANT5 * $CANT5_2)/100) * 2.37;
}
if($AUTO == 3){
  $CARBONO8 = (($CANT5 * $CANT5_2)/100) * 2.37;
}
if($AUTO == 4){
  $CARBONO8 = (($CANT5 * $CANT5_2)/100) * 2.37;
}

if($TRANSPORTE_PUBLICO == 1) {
  $CARBONO9 = $CANT5_3 * 0.167;
}
if($TRANSPORTE_PUBLICO == 2) {
  $CARBONO9 = $CANT5_3 * 0.192;
}



$CARBONO6 = (($VENTILADOR * 0.09) * 183) * 0.486;
$CARBONO7 = (($AIRE_CONDICIONADO * 1.15) * 183) * 0.486;
$CARBONO10 = $CANTIDAD6 * 0.324;
$CARBONO11 = ($CARBONO10 * $KILOMETROS6) * 365;
$CARBONO13 = $CARBONO2 * $CANTIDAD2_2;

$CARBONO12 = ($CARBONO1 + $CARBONO3 + $CARBONO4 + $CARBONO5 + $CARBONO6 + $CARBONO7 + $CARBONO8 + $CARBONO9 + $CARBONO11+$CARBONO13) / 1000;
$CARBONO_ARBOL = $CARBONO12 / 3.5;

// if ($CARBONO12 > 5.71) {
//     $Huellacarbono = "ALTA";
    
//   }
// if ($CARBONO12 == 5.71) {
//     $Huellacarbono = "PROMEDIO";
    
// }
// if ($CARBONO12 < 5.71) {
//     $Huellacarbono = "BAJA";
    
// }
?>
<main>
    <h1>Tu huella de carbono es:</h1>

    
    <?php if ($CARBONO12 > 5.71) :?>
      <h1 class="alta">ALTA</h1>
    <?php endif ; ?>
    <?php if ($CARBONO12 == 5.71) :?>
      <h1 class="promedio">PROMEDIO</h1>
    <?php endif ; ?>
    <?php if ($CARBONO12 < 5.71) :?>
      <h1 class="baja">BAJA</h1>
    <?php endif ; ?>

    <p> Sus toneladas de carbono equivalente emitidas anualmente son: <strong><?php print round($CARBONO12); ?> TCo2eq</strong> </p>

    <p> Se necesitan <strong><?php print round($CARBONO_ARBOL); ?> arboles</strong> para compesar su emision de carbono equivalente y llegar a la carbono neutralidad. </p>

    <p> Su artefacto electrico más utilizado es: <strong><?php  print $tipo_artefacto; ?></strong> </p>

    <p> El carbono generado anualmente por artefactos electricos es: <strong><?php  print round($CARBONO1); ?> kilos</strong> de carbono equivalente </p>

    <p> El carbono generado anualmente por calefaccion es: <strong><?php print round($CARBONO3); ?> kilos</strong> de carbono equivalente </p>

    <p> El carbono generado anualmente por ventilador es: <strong><?php print round($CARBONO6); ?> kilos</strong> de carbono equivalente </p>

    <p> El carbono generado anualmente por aire acondicionado es: <strong><?php print round($CARBONO7); ?> kilos</strong> de carbono equivalente </p>

    <p>El transporte publico mas usado en el año es: <strong><?php print $TRANSPORTE_PUBLICO; ?> kilos</strong> de carbono equivalente </p>

    <p> El carbono generado anualmente por coche es: <strong><?php print round($CARBONO8); ?> kilos</strong> de carbono equivalente </p>

    <p> El carbono generado anualmente por uso de transporte publico es: <strong><?php print round($CARBONO9); ?> kilos</strong> de carbono equivalente </p>

    <p> El carbono generado anualmente por viajes en avion <strong><?php print round($CARBONO11); ?> kilos</strong> de carbono equivalente</p>
    <br>
    <div class="d-grid col-2 mx-auto">
      <a class="btn btn-secondary" href="../index.php">Volver a la página principal</a>
    </div>
</main>