<?php

class aeropuertoModel{

    protected $db;
    
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
    }
    
    // Envía los datos correspondientes para agregar un Aeropuerto.
    public function addAeropuerto($idAero,$nombre,$ciudad){
        $aeropuerto=$this->db->prepare('INSERT INTO tpe_met_aeropuerto(id_aeropuerto,nombre,ciudad) VALUES (?,?,?) ');
        $aeropuerto->execute(array($idAero,$nombre,$ciudad));
    }
    
    // Modifica la información de los datos en la tabla Aeropuerto. 
    public function update($idAero,$nombre,$ciudad){
        $query = $this->db->prepare('UPDATE tpe_met_aeropuerto SET nombre=? , ciudad=? WHERE id_aeropuerto = ? ' );
        $query->execute(array( $nombre,$ciudad,$idAero));
    }
    // Elimina un aeropuerto según el ID que le paso por parámetro.
    public function deleteAeropuerto($idAero){
        $aeropuerto= $this->db->prepare("DELETE FROM tpe_met_aeropuerto WHERE id_aeropuerto=? ");
        $aeropuerto->execute(array($idAero));
    }
}
