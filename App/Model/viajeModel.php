<?php

class viajeModel {

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
    }

    function addViaje($idViaje,$email,$descripcion) {
        $viaje= $this->db->prepare("INSERT INTO viaje(id_viaje,email,descripcion) VALUES(?,?,?)");
        $viaje->execute(array($idViaje,$email));
    }

    public function updateViaje($idViaje,$email){
        $query = $this->db->prepare('UPDATE viaje SET id_viaje=? , email=?  WHERE id_viaje = ? and email= ?');
        $query->execute(array($idViaje,$email));
    }

    public function deleteViaje($idViaje,$email){
        $viaje= $this->db->prepare("DELETE FROM viaje WHERE id_viaje=? and email=? ");
        $viaje->execute(array($idViaje,$email)); 
    }

    public function getViajes(){
        
        // $query = $this->db->prepare('SELECT * FROM viaje');
        // return $query->execute();
    }

    public function getViaje($nombreViaje){
        $query = $this->db->prepare('SELECT * FROM viaje WHERE nombre = ?');
        return $query->execute($nombreViaje);
    }
}