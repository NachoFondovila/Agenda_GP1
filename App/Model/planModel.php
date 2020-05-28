<?php

class planModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
    }

    // Agrega un plan a un viaje de un usuario.
    public function addPlan($idPlan,$descript,$idViaje,$email){
        $aeropuerto=$this->db->prepare('INSERT INTO tpe_met_plan(id_plan,descripcion,id_viaje,email) VALUES (?,?,?,?) ');
        $aeropuerto->execute(array($idPlan,$descript,$idViaje,$email));
    }

    // Esta función modifica datos en la tabla de planes.
    public function update($idPlan,$descript,$idViaje,$email){
        $query = $this->db->prepare('UPDATE tpe_met_plan SET descript=?  WHERE id_plan=? and id_viaje=? and email=?' );
        $query->execute(array($idPlan,$descript,$idViaje,$email));
    }

    // Elimina un plan según el ID de viaje y usuario.
    public function deletePlan($idPlan,$idViaje,$email){
        $viaje= $this->db->prepare("DELETE FROM tpe_met_plan WHERE id_plan=? and id_viaje=? and email=?");
        $viaje->execute(array($idPlan,$idViaje,$email));
    }
}
