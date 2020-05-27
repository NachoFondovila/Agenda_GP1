<?php

require_once "./View/viajeView.php";

class userController {

    private $view;
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
        $_SESSION['MAIL'] = $user->mail;
        $_SESSION['USERNAME'] = $user->nombre;
    //informacion que me diria si el usuario esta habilitado
    //      $_SESSION['USER_TYPE'] = $user->habilitado;
    }

    //verifico que el usuario este logueado
    public function checkLog($user) {
        if (!isset($_SESSION['USERNAME'])) {
            $this->login($user);
        }       
    }

    public function getLoggedUser() {
        if (!isset($_SESSION['USERNAME'])) {
           return null;
        }
        // var_dump($_SESSION);die();
        else{
            return $_SESSION;
        }
    }

}