<?php
require_once('libs/Smarty.class.php');

class vueloView{
    private $smarty;

    function __construct(){
        $this->smarty=new Smarty(); 
        $this->smarty->assign('base',BASE_URL);
    }

    function showVuelos($vuelos,$user,$viaje){
        $this->smarty->assign('user', $user);
        $this->smarty->assign('vuelos', $vuelos);
        $this->smarty->assign('viaje', $viaje);
        $this->smarty->display('Templates/Vuelos.tpl');
    }
}