<?php

require("./sesion.php");
require("./templates/header.php");

?>

<main>
    <h1>Huella de Carbono</h1>
    <h2>¿Que es la huella de carbono?</h2>
    <p>
        La Huella de Carbono (HC) es un instrumento que permite estimar las emisiones de
        gases efecto invernadero (GEI) emitidos. El cálculo consiste en recopilar los datos
        referentes a los consumos directos e indirectos de insumos materiales y energía, y
        traducirlos en emiciones de CO2 equivalentes; universalmente se eligió el CO2 como valor
        de referencia para poder comparar con los otros GEI, ya que es el gas que más crecimiento
        ha experimentado en la atmósfera terrestre y el más abundante en porcentaje de todos ellos.
    </p>
    <img src="./img/huella-carbono-home.png" alt="imagen">
    <p>
        De aqui podemos distinguir una seria de acepciones del concepto:
        <br>
        <strong>Huella de Carbono de una Organización:</strong>
        es un informe donde se indican las emisiones de GEI realizadas por la organización
        objeto de estudio durante un periodo determinado, generalmente un año natural.
        <br>
        <strong>Huella de Carbono Personal:</strong>
        es un informe donde se indican las emisiones de GEI realizadas o emitidas por efecto
        directo o indirecto de una persona o individuo provenientes del desarrollo de las
        actividades cotidianas.
        <br>
        <strong>Huella de Carbono de un Producto:</strong>
        es un informe donde se indican las emisiones de GEI realizadas o emitidas, desde la
        extracción de las materias primas, pasando por el procesado, fabricacion y distribucion,
        hasta la etapada de uso y final de vida util de un producto o servicio.
        <br>
        <strong>Huella de Carbono de Eventos:</strong>
        otro evento muy importante, es un informe donde se indica las emiciones de GEI emitidas
        por cualquier evento en cualquier lugar, se evaluan factore como transporte, fuentes de
        energia utilizadas, desechos finales, cantidad de gente que participo, etc.
        <br>
        Este concepto general se ha convertido en un importante indicador en el debate publico sobre el
        cambio climatico, atrayendo atencion de consumidores, negocios, gobiernos e instituciones
        preocupadas por el cambio de sus actividades en el medio ambiente.
    </p>

    <div class="d-grid col-2 mx-auto">
        <a class="btn btn-success" href="./calcu/pregunta-1.php" role="button">Calculá tu Huella</a>
    </div>
</main>

<?php

require("./templates/footer.php");

?>