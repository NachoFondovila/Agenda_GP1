<?php
require_once('libs/Smarty.class.php');

class viajeView{
    
    private $smarty;

    function __construct(){
        $this->smarty=new Smarty(); 
        $this->smarty->assign('base',BASE_URL);
    }

    function showViajes($viajes,$user){
        $this->smarty->assign('user', $user);
        $this->smarty->assign('viajes', $viajes);
        $this->smarty->display('Templates/Viajes.tpl');
    }
}