<?php
class Users_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }
    public function create_user(){
        $data = [
            'name' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email')
        ];
        return $this->db->insert('users', $data);
    }
}
