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
        //Se toma por parametro el dato viaje para mostrar luego los vuelos de un usuario logueado.
        $viajeNombre = $params[':VIAJE'];
        $vuelos = $this->model->getVuelos($viajeNombre);
        $user = $this->user->getLoggedUser();
        $this->view->showVuelos($vuelos, $user, $viajeNombre);
    }

    public function addVuelo($params = []){
        //Se toman los valores que introduzca el usuario en el formulario (id_vuelo, fecha_inic, compania)
        $id_vuelo = $_POST['Nvuelo']; 
        $fecha_inic = $_POST['fecha']; 
        $compania = $_POST['compy']; 
        
        //Se ponen por defecto los siguientes datos para probar la funcionalidad del metodo.
        $fecha_fin = "2020-11-1 23:59:59";
        $cod_reserva = 1; 
        $aeronave = "Nave1"; 
        $id_user = $this->user->getLoggedUser();
        $ae_origen = 1; 
        $ae_destino = 2; 
        $asiento = 1; 
        $id_viaje = $_POST['viaje'] ; 

        if(!empty($id_vuelo) && !empty($fecha_inic) && !empty($compania)){
            $this->model->addVuelo($id_vuelo, $fecha_inic, $compania, $fecha_fin, $cod_reserva, $aeronave, $id_user, $ae_origen, $ae_destino, $asiento, $id_viaje);
            header("Location: " . BASE_URL);
        }
        else{
            echo("faltan completar los campos obligatorios.");
        }
    }
}
