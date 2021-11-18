<?php

require("./sesion.php");
require("./clases/clases.php");

$error = "";
$exito = "";
$done = FALSE;

if (isset($_POST['informar'])) {
    $datos = array(
        $_SESSION['CodUsua'],
        $_POST['medios'],
        $_POST['importe'],
        $_POST['id_transaccion']
    );

    if (datos_vacios($datos) == false) {
        // $datos = limpiar($datos);
        // foreach ($datos as $dato) {
        //     echo $dato . "<br>";
        // }
        (new usuarios)->informar_pago($datos);
        $done = TRUE;
        $exito = "¡Se informó el pago con éxito!";
    } else {
        $error = "Hay campos vacios";
    }
}

require("./templates/header.php");

?>

<main>
    <h2>Donacion a Carbono Calc</h2>
    <p>
        A continuacion completa el formulario con los datos solicitados e informar tu donacion.
    </p>
    <div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-pay">
            <label for="medios">Medio de Pago*</label>
            <select name="medios" id="medios" class="form-select">
                <option value="1">Transferencia Bancaria</option>
                <option value="2">Crédito</option>
                <option value="3">Paypal</option>
            </select>

            <label for="importe">Importe del pago*</label>
            <input type="number" name="importe" class="form-control" require>

            <label for="id_transaccion">Numero de Transaccion*</label>
            <input type="number" name="id_transaccion" class="form-control" require>

            <i>Campos Obligatorios*.</i>
            <br>

            <button type="submit" class="btn btn-primary" name="informar">Informar</button>
            <?php if (!empty($error)) : ?>
                <p class="bad"><?php echo $error; ?></p>
            <?php endif; ?>
            
            <?php if ($done) : ?>
                <p class="ok"><?php echo $exito; ?></p>
            <?php endif; ?>
        </form>
    </div>
</main>

<?php

require("./templates/footer.php");

?>