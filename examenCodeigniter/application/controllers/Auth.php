<?php
        class Auth extends CI_Controller{

            public function __construct(){

                parent::__construct();
                    $this->load->Model("AuthModel");
                
                
            }


            public function ingresar(){

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(!empty($_POST['usuario']) && !empty($_POST['clave'])){
                    $data = array("usuario" => $_POST['usuario'],
                            "clave" => $_POST['clave']);

                $response = $this->AuthModel->ingresarModel($data);
                
                if($response[0]['usuario'] == $_POST['usuario'] AND $response[0]['clave'] == $_POST['clave']){
                    $this->session->set_userdata("access",true);
                    $this->session->set_userdata("name", $response[0]['usuario']);
                    redirect(base_url() . "Home");

                
            }else{
                $this->session->set_flashdata("errorLogin","Usuario o clave incorrectos");
                redirect(base_url() . "welcome");

            }

                }

                
            }
        }}



?>