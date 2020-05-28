<?php

class emailModel {

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=metodologias;charset=utf8', 'root', '');
    }

    //Recibe los datos necesarios para dar de alta un viaje, se va a enviar a la BBDD.
    public function getUser($email) {
        $user = $this->db->prepare("SELECT * FROM tpe_met_usuario WHERE email = ?");
        return $viaje -> fetchAll(PDO::FETCH_OBJ);
    }
}