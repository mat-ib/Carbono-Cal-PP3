<?php

class usuarios
{
    function registrar($datos)
    {
        $con = conexion("root", "");
        // $consulta = $con->prepare("INSERT INTO usuarios(Nombre, Apellido, Razon_social, Tipo, Status, Cod_pais, Cod_prov, Cod_ciud, email, contrasena) VALUES (:nombre, :apellido, :razsoc, :tipo, 1, :pais, null, null, :email, :pass");
        // $consulta->execute(array(
        //     ':nombre' => $datos[0],
        //     ':apellido' => $datos[1],
        //     ':razsoc' => $datos[5],
        //     ':tipo' => $datos[6],
        //     ':pais' => $datos[2],
        //     ':email' => $datos[7],
        //     ':pass' => $datos[8],
        // ));

        $consulta = "INSERT INTO usuarios(Nombre, Apellido, Razon_social, Tipo, Status, Cod_pais, Cod_prov, Cod_ciud, email, contrasena) VALUES ('$datos[0]', '$datos[1]', '$datos[5]', '$datos[6]', 1, '$datos[2]', null, null, '$datos[7]', '$datos[8]')";
        $con->exec($consulta);
    }

    function informar_pago($datos)
    {
        $con = conexion("root", "");
        $consulta = "INSERT INTO donaciones(IDDeUsuario, Valor_don, medio, Numero_trans) VALUES ('$datos[0]','$datos[2]','$datos[1]','$datos[3]')";
        $con->exec($consulta);
    }

    function verificar($usuario)
    {
        $con = conexion("root", "");
        $consulta = $con->prepare("SELECT * FROM usuarios WHERE email = :usuario");
        $consulta->execute(array(':usuario' => $usuario));
        $resultado = $consulta->fetchAll();
        return $resultado;
    }
}
