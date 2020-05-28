<?php

require_once "./View/viajeView.php";

class userController {

    private $view;
    //Se deja un usuario por defecto para realizar las pruebas.
    private $user='{
        "nombre": "Nacho",
        "mail": "ignafon@gmail.com"
        }';

    public function __construct() {
        $this->view = new viajeView();
        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
             $this->login(json_decode($this->user));
        }
    }

    public function login($user) {
        //Se va a guardar el mail y el nombre del usuario en la sesion
        $_SESSION['MAIL'] = $user->mail;
        $_SESSION['USERNAME'] = $user->nombre;
    //informacion que me diria si el usuario esta habilitado
    //      $_SESSION['USER_TYPE'] = $user->habilitado;
    }

    // Verifico que el usuario este logueado.
    public function checkLog($user) {
        //Esta funcion va a verificar que haya alguien logueado
        if (!isset($_SESSION['USERNAME'])) {
            $this->login($user);
        }       
    }

    public function getLoggedUser() {
        //Obtengo el username del usuario logueado
        if (!isset($_SESSION['USERNAME'])) {
           return null;
        }
        else {
            return $_SESSION;
        }
    }

}