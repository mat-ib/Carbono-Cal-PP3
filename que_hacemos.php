<?php

require("./sesion.php");
require("./templates/header.php");

?>

<main>
    <h2>Que Hacemos</h2>
    <p>
        Trabajamos para defender el medio ambiente, promover la paz y estimular a la gente para que cambie actitudes
        y comportamientos que ponen en riesgo a la naturaleza.
    </p>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/what-we-do-1.jpg" class="d-block w-60" alt="imagen">
            </div>

            <div class="carousel-item">
                <img src="./img/what-we-do-2.jpg" class="d-block w-60" alt="imagen">
            </div>

            <div class="carousel-item">
                <img src="./img/what-we-do-3.jpg" class="d-block w-60" alt="imagen">
            </div>
        </div>
    </div>
    <h3>Misión</h3>
    <p>
        Trabajar de manera articulada con los diferentes actores de la sociedad para hacerle frente al Cambio Climático,
        a través de la concientización y la implementación de proyectos de adaptación y de mitigación de los gases de efecto
        invernadero, contribuyendo a la acción climática con una mirada socio- ambiental.
    </p>
</main>

<?php

require("./templates/footer.php");

?>