<?php 
class TipoEmpleadoModel extends CI_Model{

    public function getTipoEmpleadosModel(){

        $this->db->select("*");
        $this->db->from("tipoEmpleado");
        return $this->db->get()->result_array();
    }

    public function getTipoEmpleadoModel($id){

        $this->db->select("*");
        $this->db->from("tipoEmpleado");
        $this->db->where($id);
        return $this->db->get()->result_array();

    }
    public function insertTipoEmpleadosModel($data){

        return $this->db->insert("tipoEmpleado",$data);
    }

    public function updateTipoEmpleadosModel($data,$id){

        $this->db->where($id);
        return $this->db->update("tipoEmpleado",$data);
    }

    public function deleteTipoEmpleadosModel($id){

        $this->db->delete("tipoEmpleado",$id);
    }
}


?>


