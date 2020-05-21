<?php

class userController {
    public function __construct() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public function login($user) {
        $_SESSION['MAIL'] = $user->email;
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
  