<?php

require_once "./View/viajeView.php";
require_once "./Model/viajeModel.php";
require_once "./Model/vueloModel.php";
require_once "userController.php";
require_once "emailController.php";

class viajeController {

    private $view;
    private $user;
    private $email;
    private $model;
    private $vueloModel;

    public function __construct() {
        $this->view = new viajeView();
        $this->model = new viajeModel();
        $this->user = new userController();
        $this->email = new emailController();
        $this->vueloModel = new vueloModel();
    }

    // Obtiene el Object Usuario y todos sus viajes, para luego mostrarlos por pantalla.
    public function showViajes() { 
        $user = $this->user->getLoggedUser(); 
        $viajes = $this->model->getViajes($user);
        $allVuelos = $this->vueloModel->getTotalVuelos();
        $this->view->showViajes($viajes, $user, $allVuelos);
    }

    // Cada usuario puede agregar un viaje, junto con un nombre y descripción.
    public function addViaje() { 
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
        }
    }

}