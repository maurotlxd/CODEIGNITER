<?php
class Home extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->Model("EmpleadosModel");

        if(!$this->session->has_userdata("access")){
				redirect(base_url());
			}
    }

    public function index(){

        $data['data'] = $this->EmpleadosModel->getEmpleadosModel();
        $this->load->view("home",$data);
    }

    
}


?>