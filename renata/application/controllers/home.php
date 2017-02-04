<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $data['admin_name']=$this->session->userdata('admin_name');
        $data['admin_id']=$this->session->userdata('admin_id');
        if($data['admin_id']!=null)
        {
            $this->load->view('view_dashboard');
        }
        else
        {
            redirect(base_url().'login');
        }
    }

    public function index()
    {

        $this->load->view('view_home');
    }
}