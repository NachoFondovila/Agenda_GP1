<?php

class viajeModel {

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=metodologias;charset=utf8', 'root', '');
    }

    //Recibe los datos necesarios para dar de alta un viaje, se va a enviar a la BBDD.
    public function addViaje($idViaje,$email,$descripcion) {
        $viaje = $this->db->prepare("INSERT INTO tpe_met_viaje(id_viaje, email, descripcion) VALUES(?,?,?)");

        $viaje->execute(array($idViaje,$email,$descripcion));
    }

    //Esta funcion sirve para poder actualizar un viaje.
    public function updateViaje($idViaje,$email){
        $query = $this->db->prepare('UPDATE tpe_met_viaje SET id_viaje=? , email=?  WHERE id_viaje = ? and email= ?');
        $query->execute(array($idViaje,$email));
    }
    // Elimina un viaje de la Base de Datos según el ID del viaje y del usuario.
    public function deleteViaje($idViaje,$email){
        $viaje= $this->db->prepare("DELETE FROM tpe_met_viaje WHERE id_viaje=? and email=? ");
        $viaje->execute(array($idViaje,$email)); 
    }

    // Obtiene todos los viajes que realizó un usuario determinado.
    public function getViajes($user){
        $query = $this->db->prepare('SELECT * FROM tpe_met_viaje where email=?');
        $query->execute(array($user['MAIL']));
        return $query -> fetchAll(PDO::FETCH_OBJ);
    }

}