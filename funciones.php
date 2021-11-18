<?php

function conexion($usuario, $contraseña)
{
    try {
        $con = new PDO('mysql:host=localhost;dbname=carbonoexample1', $usuario, $contraseña);
        return $con;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function datos_vacios($datos)
{
    $vacio = false;
    $tam = count($datos);
    for ($c = 0; $c < $tam; $c++) {
        if (empty($datos[$c])) {
            $vacio = true;
            break;
        }
    }
    return $vacio;
}

function limpiar($datos)
{
    $tam = count($datos);
    for ($c = 0; $c < $tam; $c++) {
        if ($c != 8) {
            $datos[$c] = htmlspecialchars($datos[$c]);
            $datos[$c] = trim($datos[$c]);
            $datos[$c] = stripcslashes($datos[$c]);
        }
    }
    return $datos;
}

function verificar_session()
{
    if (!isset($_SESSION['CodUsua'])) {
        header('location: ingresar_registrarse.php');
    }
}
