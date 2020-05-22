<?php

require_once "Controller\userController.php";
require_once "Router.php";

$action=$_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r= new Router();

$r->addRoute("ver","GET","userController","showView");

$r->setDefaultRoute("userController","showView");

$r->route($_GET['action'],$_SERVER['REQUEST_METHOD']);