<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medicine_literature extends CI_Controller {

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
        $data['meds']=$this->medicine_literature_model->getAllMed();
        $data['gens']=$this->medicine_literature_model->getAllGen();
        $data['docs']=$this->medicine_literature_model->getAllDoc();
        $this->load->view('view_medicine_literature',$data);
    }
    public function drug_dse_upload()
    {
        if(isset($_FILES["pdf"]["name"]))
        {
            if($_POST['upload_file_type']=='3')
            {
                $uploadPath='upload/drug_image';
            }
            else
            {
                $uploadPath='upload/pdf_files';
            }
            $config['upload_path']=$uploadPath;
            $config['allowed_types']='pdf|jpg|png|jpeg|JPG|PNG|JPEG';
            $config['max_size']='2048';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('pdf')){
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
                if($_POST['upload_file_type']=='3')
                {
                    $lnk=base_url().'upload/drug_image/'.$fileData['file_name'];
                }
                else
                {
                    $lnk=base_url().'upload/pdf_files/'.$fileData['file_name'];
                }
                
                if($this->medicine_literature_model->insert($lnk,$_POST['upload_file_type'],$_POST['drug_id']))
                {
                    $this->session->set_userdata('message','Upload Successful');
                    redirect(base_url() . 'medicine_literature/index', 'refresh');
                }
            }
            else
            {
                echo $this->upload->display_errors();
                $this->session->set_userdata('message',$this->upload->display_errors());
                redirect(base_url() . 'medicine_literature/index', 'refresh');
            }
        }
    }

    public function drug_dse_version_upload()
    {
        $version_id=$this->input->post('version_id');
        $point1=$this->input->post('point1');
        $point2=$this->input->post('point2');
        $point3=$this->input->post('point3');
        $audio1_test=$this->input->post('audio1_test');
        $audio2_test=$this->input->post('audio2_test');
        $audio3_test=$this->input->post('audio3_test');
        $drug_audio_test=$this->input->post('drug_audio_test');
        $image_test=$this->input->post('image_test');


        if(isset($_FILES['drug_des_image']['name']))
        {
            $uploadPath='upload/drug_image';
            $config['upload_path']=$uploadPath;
            $config['allowed_types']='jpg|png|jpeg|JPG|PNG|JPEG|mp3|3gp|wav';
            $config['max_size']='2048';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('drug_des_image')){
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
                $lnk=base_url().'upload/drug_image/'.$fileData['file_name'];
                $image_test=$lnk;
            }
        }
        if(isset($_FILES['drug_audio']['name']))
        {
            $uploadPath='upload/drug_audio';
            $config1['upload_path']=$uploadPath;
            $config1['allowed_types']='mp3|3gp|wav';
            $config1['max_size']='2048';
            $this->load->library('upload',$config1);
            if($this->upload->do_upload('drug_audio')){
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
                $lnk=base_url().'upload/drug_audio/'.$fileData['file_name'];
                $drug_audio_test=$lnk;
            }
        }
        if(isset($_FILES['audio1']['name']))
        {
            $uploadPath='upload/drug_audio';
            $config2['upload_path']=$uploadPath;
            $config2['allowed_types']='mp3|3gp|wav';
            $config2['max_size']='2048';
            $this->load->library('upload',$config2);
            if($this->upload->do_upload('audio1')){
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
                $lnk=base_url().'upload/drug_audio/'.$fileData['file_name'];
                $audio1_test=$lnk;
            }
        }
        if(isset($_FILES['audio2']['name']))
        {
            $uploadPath='upload/drug_audio';
            $config3['upload_path']=$uploadPath;
            $config3['allowed_types']='mp3|3gp|wav';
            $config3['max_size']='2048';
            $this->load->library('upload',$config3);
            if($this->upload->do_upload('audio2')){
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
                $lnk=base_url().'upload/drug_audio/'.$fileData['file_name'];
                $audio2_test=$lnk;
            }
        }
        if(isset($_FILES['audio3']['name']))
        {
            $uploadPath='upload/drug_audio';
            $config4['upload_path']=$uploadPath;
            $config4['allowed_types']='mp3|3gp|wav';
            $config4['max_size']='2048';
            $this->load->library('upload',$config4);
            if($this->upload->do_upload('audio3')){
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
                $lnk=base_url().'upload/drug_audio/'.$fileData['file_name'];
                $audio3_test=$lnk;
            }

            else
            {
                echo $this->upload->display_errors();
                $this->session->set_userdata('message',$this->upload->display_errors());
                redirect(base_url() . 'medicine_literature/index', 'refresh');
            }
        }
        if($this->medicine_literature_model->insert_version_data($version_id,$point1,$point2,$point3,$audio1_test,$audio2_test,$audio3_test,$drug_audio_test,$image_test))
        {
            $this->session->set_userdata('message','Upload Successful');
            redirect(base_url() . 'medicine_literature/index', 'refresh');
        }
    }
    public function delete_med()
    {
        $drug_des_id=$this->input->get('med_des_id');
        $type=$this->input->get('type');
        if($this->input->get('full_book'))
        {

            $full_book=str_replace("http://localhost/renata/","./",$this->input->get('full_book'));;
            unlink($full_book);
        }
        if($this->input->get('benefits_feature'))
        {

            $benefits_feature=str_replace("http://localhost/renata/","./",$this->input->get('benefits_feature'));;
            unlink($benefits_feature);
        }
        $result=$this->medicine_literature_model->delete_drug($drug_des_id,$type);
        if($result)
        {
            redirect(base_url() . 'medicine_literature/index', 'refresh');
        }
    }

}