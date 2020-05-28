<?php
require_once('libs/Smarty.class.php');

class viajeView{
    
    private $smarty;
    //Se utiliza smarty para hacer las plantilas html

    function __construct(){
        $this->smarty=new Smarty(); 
        $this->smarty->assign('base',BASE_URL);
    }

    function showViajes($viajes,$user){
        //Va a recibir el usuario y sus viajes para ser mostrados por pantalla
        $this->smarty->assign('user', $user);
        $this->smarty->assign('viajes', $viajes);
        $this->smarty->display('Templates/Viajes.tpl');
    }
}