<?php

require_once "./View/viajeView.php";
require_once "./Model/viajeModel.php";
require_once "userController.php";
require_once "emailController.php";

class viajeController {

    private $view;
    private $user;
    private $email;
    private $model;

    public function __construct() {
        $this->view = new viajeView();
        $this->model = new viajeModel();
        $this->user = new userController();
        $this->email = new emailController();
    }

    public function showViajes(){
        // Reemplazado cuando esté la tabla
        //$viajes = json_decode($this->viajesEjemplo);
        $user = $this->user->getLoggedUser();
        $viajes = $this->model->getViajes($user);
        $this->view->showViajes($viajes, $user);
    }
    public function addViaje(){
        $user = $_POST['user_id'];
        $nombre = $_POST['name'];
        $descripcion = $_POST['desc'];
        if(!empty($descripcion) && !empty($nombre) && !empty($user)){
            $this->model->addViaje($nombre, $user, $descripcion); //Chequear si se pudo agregar para poder mandar el mail
            $this->email->enviarMailConfirmacion($user);
            header("Location: " . BASE_URL);
        }
        else{
            echo("faltan completar los campos obligatorios.");
            //$this->view->displayError("faltan completar los campos obligatorios.");
        }
    }
    }

   /* private $viajesEjemplo = '[{
        "nombre": "Nueva York",
        "descripcion": "",
        "ciudad de destino": "",
        "fechaInicio": "",
        "fechaFin": ""
    },
    {
        "nombre": "Birmingham",
        "descripcion": "",
        "ciudad de destino": "",
        "fechaInicio": "",
        "fechaFin": ""
    },
    {
        "nombre": "Portland",
        "descripcion": "",
        "ciudad de destino": "",
        "fechaInicio": "",
        "fechaFin": ""
    },
    {
        "nombre": "Alicante",
        "descripcion": "",
        "ciudad de destino": "",
        "fechaInicio": "",
        "fechaFin": ""
    }]';
}*/
// cada viaje tiene un nombre, una descripción, 
// una fecha de inicio y fin, y una ciudad de destino 