<?php 

	class Usuario extends CI_Controller{


		public function __construct(){

			parent::__construct();
			$this->load->model("UsuarioModel");

		}

		public function ingresar(){

			if ($_SERVER['REQUEST_METHOD'] == "POST") {

				$data = array("username" => $this->input->post("username"),
								"contrasena" => $this->input->post("contrasena"),
								"numeroSecreto" => $this->input->post("numeroSecreto"));

				$response = $this->UsuarioModel->ingresarModel($data);

				if ($response[0]['username'] == $this->input->post("username") && $response[0]['contrasena'] == $this->input->post("contrasena") && $response[0]['numeroSecreto'] == $this->input->post("numeroSecreto")) {
					
					redirect(base_url()."Home");
				}else{
					$this->session->set_flashdata("error", "El Usuario es incorrecto");
					redirect(base_url()."Welcome");
				}





		}
	}

		public function registro(){


			if ($_SERVER['REQUEST_METHOD'] == "POST") {

				$usuario = array("username" =>$this->input->post("username"));
				$verify   = $this->UsuarioModel->verificarUsuarioModel($usuario);

				if ($verify > 0) {
					
					$this->session->set_flashdata("duplicado", "El usuario ya está registrado ,intentelo de nuevo .");
					redirect(base_url()."Usuario/registro");

				}else{

				$data = array("nombres" => $this->input->post("nombres"),
								"apellidos" =>$this->input->post("apellidos"),
								"username" => $this->input->post("username"),
								"contrasena" => $this->input->post("contrasena"),
								"numeroSecreto" => $this->input->post("numeroSecreto"));
				
				$response = $this->UsuarioModel->registroModel($data);

				if ($response){
					$this->session->set_flashdata("registrado", "El usuario se registró correctamente");
					redirect(base_url() . "Welcome");
				}
				}

				
			}else{

				$this->load->view("registro");
			}
		}


		public function recuperar(){


			if($_SERVER['REQUEST_METHOD'] == "POST"){

				$usuario = array("username" =>$this->input->post("username"));
				$data= $this->UsuarioModel->recuperarUsuarioModel($usuario);

				if ($data != NULL) {
					
					$datos = array("recupera" => $data);
					$this->load->view("resultado", $datos);
				}else{

					$this->session->set_flashdata("noRecupera", "El usuario no existe,no se pueden recuperar datos !");
					redirect(base_url()."Usuario/recuperar");
				}



			}else{

				$this->load->view("recuperar");
			}
		}

		
	}

 ?>