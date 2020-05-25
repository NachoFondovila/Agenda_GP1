<?php

require_once "./View/viajeView.php";
require_once "./Model/viajeModel.php";

class viajeController {

    private $view;
    private $model;

    public function __construct() {
        $this->view = new viajeView();
        $this->model = new viajeModel();
    }

    public function showViajes(){
        // $viajes = $this->model->getViajes();
        // Reemplazado cuando esté la tabla
        $viajes = json_decode($this->viajesEjemplo);
        $user = null;
        $this->view->showViajes($viajes, $user);
    }

    private $viajesEjemplo = '[{
        "nombre": "Nueva York",
        "descripción": "",
        "ciudad de destino": "",
        "fechaInicio": "",
        "fechaFin": ""
    },
    {
        "nombre": "Birmingham",
        "descripción": "",
        "ciudad de destino": "",
        "fechaInicio": "",
        "fechaFin": ""
    },
    {
        "nombre": "Portland",
        "descripción": "",
        "ciudad de destino": "",
        "fechaInicio": "",
        "fechaFin": ""
    },
    {
        "nombre": "Alicante",
        "descripción": "",
        "ciudad de destino": "",
        "fechaInicio": "",
        "fechaFin": ""
    }]';
}
// cada viaje tiene un nombre, una descripción, 
// una fecha de inicio y fin, y una ciudad de destino 