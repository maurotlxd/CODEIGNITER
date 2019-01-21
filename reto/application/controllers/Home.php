<?php 
	class Home extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model("UsuarioModel");
		}

		public function index(){

			$data['usuarios'] = $this->UsuarioModel->getUsuarioModel();

			$this->load->view("panel",$data);
		}
	}


 ?>