<?php

require_once "./View/viajeView.php";

class userController {

    private $view;
    private $user;

    public function __construct() {
        $this->view= new viajeView();
        $this->user->nombre="Nacho";
        $this->user->mail="ifondovila@gmail.com";
        var_dump($this->user);
       /* if (session_status() != PHP_SESSION_ACTIVE){
           session_start();
            $this->login($user);
        } */ 
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
        if (! isset($_SESSION['USERNAME'])) {
           return null;
        }
        // var_dump($_SESSION);die();
        else{
            return $_SESSION;
        }
    }

    public function showView(){
        $user=$this->getLoggedUser();
        $viajes=0;
        $view->showViajes($user,$viajes);
    }

}