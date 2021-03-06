<?php

class EmpleadosModel extends CI_Model{

    public function getEmpleadosModel(){

        $this->db->select("e.nombres,e.apellidos,e.id,e.edad,e.dni,e.tipoEmpleado,te.nombre as tipo");
        $this->db->from("empleados e");
        $this->db->join("tipoEmpleado te", "e.tipoEmpleado = te.id");
        return $this->db->get()->result_array();
    }

    public function getEmpleadoModel($id){

        $this->db->select("*");
        $this->db->from("empleados");
        $this->db->where($id);
        return $this->db->get()->result_array();

    }
    public function insertEmpleadosModel($data){

        return $this->db->insert("empleados",$data);
    }

    public function updateEmpleadosModel($data,$id){

        $this->db->where($id);
        return $this->db->update("empleados",$data);
    }

    public function deleteEmpleadosModel($id){

       return  $this->db->delete("empleados",$id);
    }
}


?>