<?php
require("./sesion.php");
require("./templates/header.php");

$idusua = $_SESSION['CodUsua'];
$con = conexion("root", "");
$donaciones = "SELECT IDDeDonacion, Valor_don, medio, Fecha_don, Numero_trans FROM donaciones WHERE IDDeUsuario = $idusua";
$resultado = $con->prepare($donaciones);
$resultado->execute();
$registros = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <h1>
        A continuación, podrás ver el registro de tus donaciones.
    </h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">MONTO</th>
            <th scope="col">MEDIO DE PAGO</th>
            <th scope="col">FECHA Y HORA</th>
            <th scope="col">N° DE TRANSACCION</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($registros as $registro){
            ?>
                <tr>
                    <th scope="row"><?php echo $registro['IDDeDonacion']?></th>
                    <td><?php echo $registro['Valor_don']?></td>                
                    <?php if ($registro['medio'] == 1) : ?>
                        <td>Transferencia bancaria</td>
                    <?php endif; ?>
                    <?php if ($registro['medio'] == 2) : ?>
                        <td>Tarjeta de Crédito</td>
                    <?php endif; ?>
                    <?php if ($registro['medio'] == 3) : ?>
                        <td>PayPal</td>
                    <?php endif; ?>
                    <td><?php echo $registro['Fecha_don']?></td>
                    <td><?php echo $registro['Numero_trans']?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</main>