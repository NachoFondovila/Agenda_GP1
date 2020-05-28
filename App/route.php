<?php

require_once "Controller/viajeController.php";
require_once "Controller/vueloController.php";
require_once "Controller/emailController.php";
require_once "Router.php";

$action=$_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r= new Router();

$r->addRoute("addViaje","POST","viajeController","addViaje");
$r->addRoute("showVuelos/:VIAJE","GET","vueloController","showVuelos");
$r->addRoute("addVuelo","POST","vueloController","addVuelo");

$r->setDefaultRoute("viajeController","showViajes");

$r->route($_GET['action'],$_SERVER['REQUEST_METHOD']);