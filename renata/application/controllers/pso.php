<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include("asset/src/NexmoMessage.php");
class Pso extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $data['admin_name'] = $this->session->userdata('admin_name');
        $data['admin_id'] = $this->session->userdata('admin_id');
        if ($data['admin_id'] != null) {
            $this->load->view('view_dashboard');
        } else {
            redirect(base_url() . 'login');
        }
    }

    public function index()
    {
        $this->load->view('view_dashboard');
    }

    public function add_pso()
    {
        $this->load->view('view_add_pso');
    }

    public function manage_pso()
    {
        $data['psos'] = $this->pso_model->select_all_pso();
        $this->load->view('view_manage_pso', $data);
    }

    public function view_pso()
    {
        $data['pso'] = $this->pso_model->select_pso_by_pso_id($this->input->get('pso_id'));
//        print_r($data['pso']);
//        return;
        $this->load->view('view_pso_info',$data);
    }

    public function insert_pso()
    {
        $pso_name = $this->input->post('pso_name');
        $pso_gender = $this->input->post('pso_gender');
        $pso_dob = $this->input->post('pso_dob');
        $pso_email = $this->input->post('pso_email');
        $pso_phone = $this->input->post('pso_phone');
        $pso_renata_id = $this->input->post('pso_renata_id');
        $pso_region_id = $this->input->post('pso_region_id');
        $pso_des = $this->input->post('pso_designation');
        $pp = '';
        $pso_password = mt_rand(100000, 999999);

        if ($this->form_validation->run('addpso'))
        {
            if (!empty($_FILES['pso_image']['name'])) {
                $uploadPath = 'upload/pso_image';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|png|jpeg|JPEG|PNG|JPG';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('pso_image')) {
                    $fileData = $this->upload->data();
                    $uploadData['file_name'] = $fileData['file_name'];
                }
            }
            
            $nexmo_sms=new NexmoMessage('116a8a67','91d9f00573f556b5');
            $info = $nexmo_sms->sendText( '+88'.$pso_phone, 'Renata', 'Your Renata App Id: '.$pso_renata_id."\nYour Renata App Password: ".$pso_password."\n");
//            $this->session->set_userdata('password',$pso_password);
            if (!empty($uploadData)) {
                $pp = base_url() . 'upload/pso_image/' . $fileData['file_name'];
                $this->pso_model->insert_pso($pso_renata_id, $pso_name, $pso_gender, $pso_dob, $pso_email, $pso_phone,$pso_des, $pso_password, $pp, '1', $pso_region_id);
            } else {
                $this->pso_model->insert_pso($pso_renata_id, $pso_name, $pso_gender, $pso_dob, $pso_email, $pso_phone,$pso_des, $pso_password, '', '1', $pso_region_id);
            }
            $this->session->set_userdata('confirm_add_pso','Pso Insert Successful');
            redirect(base_url() . 'pso/add_pso', 'refresh');
        }
        else
        {
            $data['pso_add']=validation_errors();
            $this->load->view('view_add_pso',$data);
        }
    }

    public function update_password()
    {
        $pso_id=$this->input->get('pso_id');
        $pso_phone=$this->input->get('pso_number');
        $pso_renata_id=$this->input->get('pso_renata_id');
        $pso_password = mt_rand(100000, 999999);
        $result=$this->pso_model->update_password($pso_id,$pso_password);
        $nexmo_sms=new NexmoMessage('116a8a67','91d9f00573f556b5');
        $info = $nexmo_sms->sendText( '+88'.$pso_phone, 'Renata', 'Your Renata App Id: '.$pso_renata_id."\nYour Renata App Update Password: ".$pso_password."\n");
        $this->session->set_userdata('update_password','Password Update Successful');
        redirect(base_url() . 'pso/manage_pso', 'refresh');
    }
    public function delete_account()
    {
        $pso_id=$this->input->get('pso_id');
        $this->pso_model->delete_account($pso_id);
        $this->session->set_userdata('delete_account','Pso Account Delete Successful');
        redirect(base_url() . 'pso/manage_pso', 'refresh');
    }

    public function update_pso()
    {
        $pso_id = $this->input->post('pso_id');
        $pso_name = $this->input->post('pso_name');
        $pso_gender = $this->input->post('pso_gender');
        $pso_dob = $this->input->post('pso_dob');
        $pso_email = $this->input->post('pso_email');
        $pso_phone = $this->input->post('pso_phone');
        $pso_renata_id = $this->input->post('pso_renata_id');
        $pso_region_id = $this->input->post('pso_region_id');
        $pso_des = $this->input->post('pso_designation');
        $pp='';
        if ($this->form_validation->run('updatepso'))
        {
            if (!empty($_FILES['pso_image']['name'])) {
                $uploadPath = 'upload/pso_image';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|png|jpeg|JPEG|PNG|JPG';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('pso_image')) {
                    $fileData = $this->upload->data();
                    $uploadData['file_name'] = $fileData['file_name'];
                }
            }
            if (!empty($uploadData)) {
                $pp = base_url() . 'upload/pso_image/' . $fileData['file_name'];
                $this->pso_model->update_pso($pso_renata_id, $pso_name, $pso_gender, $pso_dob, $pso_email, $pso_phone,$pso_des, $pp, $pso_region_id,$pso_id);
            } else {
                $this->pso_model->update_pso($pso_renata_id, $pso_name, $pso_gender, $pso_dob, $pso_email, $pso_phone,$pso_des, '', $pso_region_id,$pso_id);
            }
            $this->session->set_userdata('confirm_update_pso','Pso Update Successful');
            redirect(base_url() . 'pso/manage_pso', 'refresh');
        }
        else
        {
            $data['pso'] = $this->pso_model->select_pso_by_pso_id($pso_id);
            $data['pso_add']=validation_errors();
            $this->load->view('view_pso_info',$data);
        }
    }


}