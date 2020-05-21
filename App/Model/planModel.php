<?php

class planModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
    }

    public function addPlan($idPlan,$descript,$idViaje,$email){
        $aeropuerto=$this->db->prepare('INSERT INTO plan(id_plan,descripcion,id_viaje,email) VALUES (?,?,?,?) ');
        $aeropuerto->execute(array($idPlan,$descript,$idViaje,$email));
    }

    public function update($idPlan,$descript,$idViaje,$email){
        $query = $this->db->prepare('UPDATE plan SET descript=?  WHERE id_plan=? and id_viaje=? and email=?' );
        $query->execute(array($idPlan,$descript,$idViaje,$email));
    }

    public function deletePlan($idPlan,$idViaje,$email){
        $viaje= $this->db->prepare("DELETE FROM plan WHERE id_plan=? and id_viaje=? and email=?");
        $viaje->execute(array($idPlan,$idViaje,$email));
    }
