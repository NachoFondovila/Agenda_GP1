<?php
require_once('libs/Smarty.class.php');

class vueloView{
    private $smarty;

    function __construct(){
        $this->smarty=new Smarty(); 
        $this->smarty->assign('base',BASE_URL);
    }

    function showVuelos($vuelos,$user,$viaje){
        //Va a recibir los vuelos y el viaje de un usuario logueado y serán mostrados por pantalla.
        $this->smarty->assign('user', $user);
        $this->smarty->assign('vuelos', $vuelos);
        $this->smarty->assign('viaje', $viaje);
        $this->smarty->display('Templates/Vuelos.tpl');
    }
}