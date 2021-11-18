<?php

require("./sesion.php");
require("./templates/header.php");

?>

<main>
    <h2>Calculadora de huella de carbono</h2>
    <p>
        A continuacion completa el formulario con los datos solicitados para obtener tu huella de carbono.
    </p>
    <div>
        <form class="form-calc">
            <div>
                <legend>Selecciona el artefacto mas utilizado en tu hogar y la cantidad de horas</legend>
                <select class="form-select">
                    <option selected>Seleccione una opcion...</option>
                    <option value="1">Microondas</option>
                    <option value="2">PC Desktop</option>
                    <option value="3">PC Laptop</option>
                    <option value="4">Pava electrica</option>
                    <option value="5">Radio</option>
                </select>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="24" placeholder="Cantidad de horas">
                </div>
            </div>

            <br>

            <div>
                <legend>Que tipo de lamparas tenes mayormente en tu casa</legend>
                <select class="form-select">
                    <option selected>Seleccione una opcion...</option>
                    <option value="1">Bajo Consumo</option>
                    <option value="2">Incandesente</option>
                    <option value="3">Led</option>
                    <option value="4">Tubo Fluorecente</option>
                    <option value="5">Tubo Led</option>
                </select>
                <br>
                <select class="form-select">
                    <option selected>Consumos en Watts</option>
                    <option value="1">4w</option>
                    <option value="2">6w</option>
                    <option value="3">9w</option>
                    <option value="4">12w</option>
                    <option value="5">15w</option>
                </select>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="24" placeholder="Cantidad de horas">
                </div>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="24" placeholder="Cantidad de lamparas">
                </div>
            </div>

            <br>

            <div>
                <legend>Tipo de calefaccion</legend>
                <select class="form-select">
                    <option selected>Seleccione una opcion...</option>
                    <option value="1">Electrica</option>
                    <option value="2">Gas</option>
                    <option value="3">Leña</option>
                </select>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="24" placeholder="Cantidad de horas en uso diario">
                </div>
            </div>

            <br>

            <div>
                <legend>Promedio en horas de artefactos para refrigeracion de vivienda</legend>
                <div>
                    <input type="number" class="form-control" min="0" max="24" placeholder="Ventilador">
                </div>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="24" placeholder="Aire Acondicionado">
                </div>
            </div>

            <br>

            <div>
                <legend>Vehiculo utilizado para desplazarte</legend>
                <select class="form-select">
                    <option selected>Seleccione una opcion...</option>
                    <option value="1">Automovil y/o Motocicleta</option>
                    <option value="2">Bicicleta</option>
                    <option value="3">Transporte Publico</option>
                </select>
                <br>
                <select class="form-select">
                    <option selected>Tipo de combustible utilizado por su vehiculo</option>
                    <option value="1">Gasoil</option>
                    <option value="2">GNC</option>
                    <option value="3">Nafta</option>
                    <option value="4">Nada</option>
                </select>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="10000" placeholder="Distancia en KM recorrido al año">
                </div>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="100" placeholder="Consumo en Litros cada 100km">
                </div>
            </div>

            <br>

            <div>
                <legend>Cantidad de vuelos (comerciales) realizados el año pasado</legend>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="100" placeholder="Cantidad">
                </div>
                <br>
                <div>
                    <input type="number" class="form-control" min="0" max="10000" placeholder="Kilometros recorridos">
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Calcular</button>

        </form>
    </div>
</main>

<?php

require("./templates/footer.php");

?>