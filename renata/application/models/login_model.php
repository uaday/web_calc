<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function lcheck($email,$pass)
    {
        $data=array(
            'admin_email'=>$email,
            'admin_password'=>md5($pass)
        );
        $query = $this->db->get_where('tbl_user_admin',$data);
        return $query->result();
    }
}