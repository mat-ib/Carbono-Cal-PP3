<?php

require("./sesion.php");
require("./templates/header.php");

?>

<main>
    <h2>Nuestros socios</h2>
    <p>
        Somos una empresa creada y dirigida por un directorio el cual fue fundado por un grupo de empresas interesadas en la sustentabilidad.
    </p>
    <div class="img-partner">
        <img src="./img/partner-1.jpg" alt="image" class="img-fluid">
        <img src="./img/partner-2.jpg" alt="image" class="img-fluid">
        <img src="./img/partner-3.jpg" alt="image" class="img-fluid">
    </div>
    <br>
    <br>
    <h3>Ayudanos y colabora en nuestra causa, dona 💰</h3>
    <div class="d-grid col-2 mx-auto">
        <a class="btn btn-success" href="./informar_pago.php" role="button">Informar donacion</a>
    </div>
</main>

<?php

require("./templates/footer.php");

?>