<?php

require_once "./View/vueloView.php";
require_once "./Model/vueloModel.php";
require_once "userController.php";


class vueloController {

    private $view;
    private $user;
    private $model;

    public function __construct() {
        $this->view = new vueloView();
        $this->model = new vueloModel();
        $this->user = new userController();
    }

    public function showVuelos($params = null){
        $viajeNombre = $params[':VIAJE'];
        $vuelos = $this->model->getVuelos($viajeNombre);
        $user = $this->user->getLoggedUser();
        $this->view->showVuelos($vuelos, $user, $viajeNombre);
    }

    public function addVuelo($params = []){
        $id_vuelo = $_POST['Nvuelo']; // hecho
        $fecha_inic = $_POST['fecha']; // hecho
        $compania = $_POST['compy']; // hecho

        $fecha_fin = "2020-11-1 23:59:59"; // harcoder de la base de vuelo.
        $cod_reserva = 1; // harcoder de la base de vuelo.
        $aeronave = "Nave1"; // harcoder de la base de vuelo.
        $id_user = $this->user->getLoggedUser();
        $ae_origen = 1; // harcoder de la base de vuelo.
        $ae_destino = 2; // harcoder de la base de vuelo.
        $asiento = 1; // harcoder de la base de vuelo.
        $id_viaje = $_POST['viaje'] ; // harcoder de la base de vuelo.

        if(!empty($id_vuelo) && !empty($fecha_inic) && !empty($compania)){
            // $this->model->addVuelo($id_vuelo, $fecha_inic, $compania);
            $this->model->addVuelo($id_vuelo, $fecha_inic, $compania, $fecha_fin, $cod_reserva, $aeronave, $id_user, $ae_origen, $ae_destino, $asiento, $id_viaje);

            header("Location: " . BASE_URL);
        }
        else{
            echo("faltan completar los campos obligatorios.");
            //$this->view->displayError("faltan completar los campos obligatorios.");
        }
    }
    }