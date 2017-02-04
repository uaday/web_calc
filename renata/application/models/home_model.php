<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function lcheck($name,$pass)
    {
        $sql="SELECT * FROM users WHERE username='$name' and password='$pass'";
        $this->load->database();
        $result=$this->db->query($sql);
        return $result->result_array();
    }
}