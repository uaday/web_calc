<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

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
        $this->load->view('view_dashboard');
    }
    public function create_test()
    {
        $this->load->view('view_create_test');
    }
    public function result()
    {
        $this->load->view('view_result');
    }
    public function test_page()
    {
        $this->load->view('view_test_page');
    }
    public function view_exam_ques()
    {
        $this->load->view('view_exam_ques');
    }
}