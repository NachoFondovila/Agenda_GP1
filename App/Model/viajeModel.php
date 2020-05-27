<?php

class viajeModel {

    protected $db;

    function __construct(){
        //$this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
        $this->db = new PDO('mysql:host=localhost;'.'dbname=metodologias;charset=utf8', 'root', '');
    }

    public function addViaje($idViaje,$email,$descripcion) {
        $viaje = $this->db->prepare("INSERT INTO tpe_met_viaje (id_viaje, email, descripcion) VALUES(?,?,?)");
        $viaje->execute(array($idViaje,$email,$descripcion));
    }

    public function updateViaje($idViaje,$email){
        $query = $this->db->prepare('UPDATE tpe_met_viaje SET id_viaje=? , email=?  WHERE id_viaje = ? and email= ?');
        $query->execute(array($idViaje,$email));
    }

    public function deleteViaje($idViaje,$email){
        $viaje= $this->db->prepare("DELETE FROM tpe_met_viaje WHERE id_viaje=? and email=? ");
        $viaje->execute(array($idViaje,$email)); 
    }

    public function getViajes($user){
        $query = $this->db->prepare('SELECT * FROM tpe_met_viaje where email=?');
        $query->execute(array($user['MAIL']));
        return $query -> fetchAll(PDO::FETCH_OBJ);
    }

}