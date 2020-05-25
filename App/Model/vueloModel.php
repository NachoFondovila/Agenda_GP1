<?php

class vueloModel{

    protected $db;
    protected $api;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=metodologias;charset=utf8', 'root', '');
        $this->api="http:flystats";
    }

    function addVuelo($id_vuelo, $fecha_inic, $fecha_fin, $cod_reserva, $compania, $aeronave, $ae_origen, $ae_destino,$asiento,$id_viaje,$id_user) {
        $viaje= $this->db->prepare("INSERT INTO vuelo(id_vuelo,fecha_inic,fecha_fin,cod_reserva, compania, aeronave,id_aer_origen,id_aer_destino,nro_asiento,id_viaje,email) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        $viaje->execute(array($id_vuelo, $fecha_inic, $fecha_fin, $cod_reserva, $compania, $aeronave, $ae_origen, $ae_destino,$asiento,$id_viaje,$id_user));
    }

    public function updateVuelo($id_vuelo, $fecha_inic, $fecha_fin, $cod_reserva, $compania, $aeronave, $ae_origen, $ae_destino,$asiento,$id_viaje,$id_user){
        $query = $this->db->prepare('UPDATE vuelo SET fecha_inic=? ,fecha_fin=? ,cod_reserva=? ,compania=? ,aeronave=? ,id_aer_origen=? ,id_aer_destino=? ,asiento WHERE id_vuelo = ? ' );
        $query->execute(array($idViaje,$email));
    }

    public function deleteVuelo($idVuelo){
        $viaje= $this->db->prepare("DELETE FROM vuelo WHERE id_vuelo=? ");
        $viaje->execute(array($idVuelo));
    }

    public function getVuelos($viajeNombre){
        $viaje= $this->db->prepare("SELECT * FROM vuelo WHERE nombreViaje = ?");
        return $viaje->execute(array($viajeNombre));
    }
}