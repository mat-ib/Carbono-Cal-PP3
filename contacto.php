<?php

require("./sesion.php");
require("./templates/header.php");

?>

<main>
    <h2>Hagamos sinergia</h2>
    <p>
        Si llegaste hasta aca, <a href="mailto:sustentabilidad@carbonocalc.com" class="our-mail">escribinos</a> o completa el siguiente formulario:
    </p>
    <div>
        <form action="#" method="POST">
            <!-- <label>Nombre y Apellido:</label> -->
            <input type="text" name="Nombre_Apellido" placeholder="Ingresá tu nombre y apellido" class="form-control" required>

            <!-- <label>Email:</label> -->
            <input type="email" name="Email" placeholder="ejemplo@ejemplo.com" class="form-control" required>

            <!-- <label>Mensaje:</label> -->
            <textarea name="Mensaje" cols="30" rows="10" placeholder="Escribí tu mensaje..." class="form-control" required></textarea>

            <button type="button" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.1305298671164!2d-58.37110168477046!3d-34.60086068046025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a33533073abfd9%3A0x4bdcb3a812cbeece!2sBouchard%20557%2C%20C1106ABG%20CABA!5e0!3m2!1ses-419!2sar!4v1633114312539!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</main>

<?php

require("./templates/footer.php");

?>