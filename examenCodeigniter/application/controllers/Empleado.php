<?php 

	
	class Empleado extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->Model("EmpleadosModel");
			$this->load->Model("TipoEmpleadoModel");

			if(!$this->session->has_userdata("access")){
				redirect(base_url());
			}
			
			
		}


		public function edit($id){

			$idd =array("id" => $id);

			$response['empleado'] = $this->EmpleadosModel->getEmpleadoModel($idd);
			$response['tipoEmpleado'] = $this->TipoEmpleadoModel->getTipoEmpleadosModel();

			$this->load->View("edit",$response);
			


		}

		public function add(){


			$data['tipoEmpleados'] = $this->TipoEmpleadoModel->getTipoEmpleadosModel();
			$this->load->View("add",$data);
		}

		public function agregarEmpleado(){

			if($_SERVER['REQUEST_METHOD'] == "POST"){

				$data = array("nombres" => $this->input->post('nombres'),
								"apellidos" => $this->input->post('apellidos'),
								"edad" => $this->input->post('edad'),
							  	"dni" => $this->input->post('dni'),
							  	"tipoEmpleado" => $this->input->post('tipoEmpleado'));

				$response = $this->EmpleadosModel->insertEmpleadosModel($data);

				if ($response) {
					 $this->session->set_flashdata("insertado","Has Agregado un empleado ! ");
					redirect(base_url() . "home");
					# code...
				}
			}
		}

		public function update($id){

			if($_SERVER['REQUEST_METHOD'] == "POST"){

				$idd = array("id" => $id);

				$data = array("nombres" => $this->input->post('nombres'),
								"apellidos" => $this->input->post('apellidos'),
								"edad" => $this->input->post('edad'),
							  	"dni" => $this->input->post('dni'),
							  	"tipoEmpleado" => $this->input->post('tipoEmpleado'));


				$response = $this->EmpleadosModel->updateEmpleadosModel($data,$idd);

				if ($response) {
					$this->session->set_flashdata("actualizado","Has Actualizado un empleado ! ");
					redirect(base_url() . "home");
					# code...
				}
			}
		}


		public function delete($id){

			$data['id'] = $id;
			$this->load->View("delete",$data);
		}

		public function eliminarEmpleado($id){

		$idd = array('id' => $id);

		$response = $this->EmpleadosModel->deleteEmpleadosModel($idd);

		if($response){
			$this->session->set_flashdata("eliminado","Has Eliminado un empleado ! ");
			redirect(base_url() . "home");
		}

		}

		public function search(){

			$this->load->View("search");
		}

		public function searchEmpleado(){

			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				
				$id = array("id" => $this->input->post("search"));

				$response['busqueda'] = $this->EmpleadosModel->getEmpleadoModel($id);

				$this->load->view("search" , $response);
			}
		}

		public function out(){

			$this->session->sess_destroy();
			redirect(base_url());
		}
	}

 ?>