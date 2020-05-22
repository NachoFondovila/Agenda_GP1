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
        $this->smarty->assign('css', '<link rel=stylesheet href="style.css" type="text/css" media=screen>');
        $this->smarty->assign('Logo','<img src="FlyingApp.png">');
        $this->smarty->display('Templates/header.tpl');
    }
}