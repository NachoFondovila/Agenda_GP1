<?php

class escalaModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
    }

    public function addEscala($idAero,$idVuelo,$tiempo){
        $aeropuerto=$this->db->prepare('INSERT INTO escala(id_aeropuerto,id_vuelo,tiempo_escala) VALUES (?,?,?) ');
        $aeropuerto->execute(array($idAero,$idVuelo,$tiempo));
    }

    public function update($idAero,$idVuelo,$tiempo){
        $query = $this->db->prepare('UPDATE escala SET tiempo_escala WHERE id_vuelo = ? and id_aeropuerto=? ' );
        $query->execute(array(($tiempo,$idAero,$idVuelo));
    }

    public function deleteEscala($idAero,$idVuelo){
        $viaje= $this->db->prepare("DELETE FROM escala WHERE id_aeropuerto=? and id_vuelo=? ");
        $viaje->execute(array($idAero,$idVuelo));
    }
