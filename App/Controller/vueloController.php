<?php

require_once "./View/vueloView.php";
require_once "./Model/vueloModel.php";

class vueloController {

    private $view;
    private $model;

    public function __construct() {
        $this->view = new vueloView();
        $this->model = new vueloModel();
    }

    public function showVuelos($params = null){
        // $vuelos = $this->model->getVuelos();
        // Reemplazado cuando esté la tabla
        $viajeNombre = $params[':VIAJE'];
        if ($viajeNombre == "Nueva York"){
            $vuelos = array(json_decode($this->vuelosEjemplo)[0]);
        }
        if ($viajeNombre == "Birmingham"){
            $vuelos = array(json_decode($this->vuelosEjemplo)[1]);
        }
        if ($viajeNombre == "Portland"){
            $vuelos = array(json_decode($this->vuelosEjemplo)[2]);
        }
        if ($viajeNombre == "Alicante"){
            $vuelos = array(json_decode($this->vuelosEjemplo)[3]);
        }
        // estos if feos habría que cambiarlo filtrando del model
        // $vuelos = json_decode($this->vuelosEjemplo);
        $user = null;
        $this->view->showVuelos($vuelos, $user, $viajeNombre);
    }

    private $vuelosEjemplo = '[{
            "nroVuelo": "215",
            "compania": "American Airlines",
            "aeropuertoLlegada": "John F. Kennedy International Airport",
            "aeropuertoSalida": "Los Angeles International Airport",
            "lugarLlegada": "New York, NY, US ",
            "lugarSalida": "Los Angeles, CA, US",
            "fechaVuelta": "7-Oct-2020",
            "fechaIda": "25-Aug-2020",
            "horaIda": "08:00",
            "horaLlegada": "08:00",
            "asiento": "35",
            "codigoReserva": "E4G708",
            "escala": "-",
            "infoAeronave": "Embraer 190: Asientos: 88 Económica - 8 Preium, Largo: 36,24 m, Envergadura: 28,72 m, Alcance: 4.448 km"
        },
        {
            "nroVuelo": "173",
            "compania": "American Airlines",
            "aeropuertoLlegada": "Birmingham International Airport",
            "aeropuertoSalida": "Los Angeles International Airport",
            "lugarLlegada": "Birmingham, UK",
            "lugarSalida": "Los Angeles, CA, US",
            "fechaVuelta": "15-May-2021",
            "fechaIda": "05-Jan-2021",
            "horaIda": "16:45",
            "horaLlegada": "23:15",
            "asiento": "26",
            "codigoReserva": "94LNK1",
            "escala": "-",
            "infoAeronave": "Boeing 737: Asientos: 120 Económica - 8 Premium, Largo: 33,6 m - 39,5 m, Envergadura: 35,8 m - 35,8 m, Alcance: 6.370 km - 5.765 km"
        },
        {
            "nroVuelo": "48",
            "compania": "American Airlines",
            "aeropuertoLlegada": "Portland International Airport",
            "aeropuertoSalida": "Los Angeles International Airport",
            "lugarLlegada": "Portland, NE, US",
            "lugarSalida": "Los Angeles, CA, US",
            "fechaVuelta": "24-May-2020",
            "fechaIda": "10-Jun-2020",
            "horaIda": "10:30",
            "horaLlegada": "23:30",
            "asiento": "74",
            "codigoReserva": "10U7JS",
            "escala": "-",
            "infoAeronave": "Airbus 340: Asientos: 263 Económica - 30 Business, Largo: 63,69 m, Envergadura: 60,3 m, Alcance: 15.000 km"
        },
        {
            "nroVuelo": "107",
            "compania": "American Airlines",
            "aeropuertoLlegada": "Aeropuerto Internacional de Alicante",
            "aeropuertoSalida": "Los Angeles International Airport",
            "lugarLlegada": "Alicante, ES",
            "lugarSalida": "Los Angeles, CA, US",
            "fechaVuelta": "15-Dec-2020",
            "fechaIda": "26-Nov-2020",
            "horaIda": "02:00",
            "horaLlegada": "10:00",
            "asiento": "83",
            "codigoReserva": "H4ZI62",
            "escala": "-",
            "infoAeronave": "Boeing 737 MAX: Asientos: 162 Económica - 8 Premium, Largo: 39,5 m, Envergadura: 35,9 m, Alcance: 6.500 km"
        }]';
}
