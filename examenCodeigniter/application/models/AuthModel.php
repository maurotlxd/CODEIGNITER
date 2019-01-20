<?php

    class AuthModel extends CI_Model{



        public function ingresarModel($data){

            $this->db->select("*");
            $this->db->from("usuarios");
            $this->db->where($data);
            return  $this->db->get()->result_array();

        }
    }


?>