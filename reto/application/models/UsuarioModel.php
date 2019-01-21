<?php 

class UsuarioModel extends CI_Model{

	public function registroModel($data){

		return $this->db->insert("usuarios", $data);
	}

	public function ingresarModel($data){

		$this->db->select("*");
		$this->db->from("usuarios");
		$this->db->where($data);
		return $this->db->get()->result_array();
	}

	public function verificarUsuarioModel($data){
		$this->db->select("*");
		$this->db->from("usuarios");
		$this->db->where($data);
		return $this->db->get()->num_rows();

	}

	public function recuperarUsuarioModel($usuario){
		$this->db->select("*");
		$this->db->from("usuarios");
		$this->db->where($usuario);
		return $this->db->get()->result_array();

	}

	public function getUsuarioModel(){
		$this->db->select("*");
		$this->db->from("usuarios");
		return $this->db->get()->result_array();

	}
}

 ?>