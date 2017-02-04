<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tar_shop extends CI_Controller {

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
    public function create_target()
    {
        $data['regions']=$this->tar_shop_model->get_region();
        $data['psos']=$this->tar_shop_model->get_pso();
        $this->load->view('view_create_target',$data);
    }
    public function track_incentive()
    {
        $data['booked']=$this->tar_shop_model->show_all_booked_incentive();
        $data['history']=$this->tar_shop_model->show_all_incentive_history();
        $this->load->view('view_track_incentive',$data);
    }
    public function create_incentive()
    {
        $in_title=$this->input->post('title');
        $in_description=$this->input->post('description');
        $in_validation=$this->input->post('validation');
        $in_point=$this->input->post('point');
        $in_quantity=$this->input->post('quantity');
        $global=$this->input->post('global');

        if (!empty($_FILES['image']['name'])) {
            $uploadPath = 'upload/shop_image';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG|PNG|JPG';
            $config['max_size'] = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
            }
        }
        if (!empty($uploadData)) {
            $pp = base_url() . 'upload/shop_image/' . $fileData['file_name'];
            $id=$this->tar_shop_model->insert_incentive($in_title,$in_description,$in_validation,$in_point,$in_quantity,$pp);
        } else {
            $id=$this->tar_shop_model->insert_incentive($in_title,$in_description,$in_validation,$in_point,$in_quantity,'');
        }
        if($global=='global')
        {
            $this->tar_shop_model->set_global($id);
        }
        else
        {
            $test=$this->input->post('region');
            $test2=$this->input->post('pso');
            if($test)
            {
                foreach ($test as $row)
                {
                    $this->tar_shop_model->set_region($id,$row);
                }
            }
            else if($test2)
            {
                foreach ($test2 as $row)
                {
                    $this->tar_shop_model->set_psos($id,$row);
                }
            }
        }
        $this->session->set_userdata('create_shop','Create Incentive Successful!');
        redirect(base_url() . 'tar_shop/create_target', 'refresh');
    }

    public function approve_booking()
    {
        $transaction_id=$this->input->get('tar_id');
        $this->tar_shop_model->approve_transaction($transaction_id);
        redirect(base_url() . 'tar_shop/track_incentive', 'refresh');
    }

    public function export()
    {
        $result=$this->tar_shop_model->get_transaction();
        $this->export_excel->to_excel($result,'List Of Incentive');
        redirect(base_url() . 'tar_shop/track_incentive', 'refresh');
    }

}