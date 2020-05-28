<?php

class escalaModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
    }

    // Agrega una escala según el aeropuerto, el vuelo y el tiempo que le envío por parámentro.
    public function addEscala($idAero,$idVuelo,$tiempo){
        $aeropuerto=$this->db->prepare('INSERT INTO tpe_met_escala(id_aeropuerto,id_vuelo,tiempo_escala) VALUES (?,?,?) ');
        $aeropuerto->execute(array($idAero,$idVuelo,$tiempo));
    }

    // Esta función modifica una escala ya existente.
    public function update($idAero,$idVuelo,$tiempo){
        $query = $this->db->prepare('UPDATE tpe_met_escala SET tiempo_escala WHERE id_vuelo = ? and id_aeropuerto=? ' );
        $query->execute(array($tiempo,$idAero,$idVuelo));
    }

    // Borra una escala teniendo en cuenta tanto el ID del aeropuerto como del vuelo.
    public function deleteEscala($idAero,$idVuelo){
        $viaje= $this->db->prepare("DELETE FROM tpe_met_escala WHERE id_aeropuerto=? and id_vuelo=? ");
        $viaje->execute(array($idAero,$idVuelo));
    }
}
