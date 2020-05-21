<?php

class aeropuertoModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
    }

    public function addAeropuerto($idAero,$nombre,$ciudad){
        $aeropuerto=$this->db->prepare('INSERT INTO aeropuerto(id_aeropuerto,nombre,ciudad) VALUES (?,?,?) ');
        $aeropuerto->execute(array($idAero,$nombre,$ciudad));
    }

    public function update($idAero,$nombre,$ciudad){
        $query = $this->db->prepare('UPDATE aeropuerto SET nombre=? , ciudad=? WHERE id_aeropuerto = ? ' );
        $query->execute(array( $nombre,$ciudad,$idAero));
    }

    public function deleteAeropuerto($idAero){
        $aeropuerto= $this->db->prepare("DELETE FROM aeropuerto WHERE id_aeropuerto=? ");
        $aeropuerto->execute(array($idAero));
    }
