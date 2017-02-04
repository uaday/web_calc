<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medicine_literature_model extends CI_Model {


    public function getAllGen()
    {
        $sql="SELECT * FROM tbl_drug_generic_name";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function getAllDoc()
    {
        $sql="SELECT * FROM tbl_doctor_type";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function getAll(){
        $sql="SELECT * FROM tbl_drug";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function get_drug_by_gen_id($gen_id)
    {
        $sql="SELECT * FROM tbl_drug WHERE tbl_drug_generic_name_gen_id='$gen_id'";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function get_version_by_doc_type($doc_type,$drug_id)
    {
        $sql="SELECT * FROM tbl_drug_detail_version WHERE 	tbl_doctor_type_doc_type_id='$doc_type' AND tbl_drug_drug_id='$drug_id'";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function get_version_data($version_id)
    {
        $sql="SELECT * FROM tbl_drug_detail_version WHERE 	detail_version_id='$version_id'";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function get_file_by_type($type,$drug_id)
    {
        if($type==1)
        {
            $sql="SELECT drug_full_book FROM tbl_drug_des WHERE tbl_drug_drug_id='$drug_id'";
        }
        else if($type==2)
        {
            $sql="SELECT benefits_feature FROM tbl_drug_des WHERE tbl_drug_drug_id='$drug_id'";
        }
        else
        {
            $sql="SELECT drug_image FROM tbl_drug_des WHERE tbl_drug_drug_id='$drug_id'";
        }
        $query=$this->db->query($sql);
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            $sql="INSERT INTO tbl_drug_des(tbl_drug_drug_id,create_drug_date,create_drug_time) VALUES('$drug_id',CURRENT_DATE,CURRENT_TIME )";
            $this->db->query($sql);
        }
    }

    public function insert($data,$type,$drug_id){
        if($type==1)
        {
            $sql="UPDATE tbl_drug_des SET drug_full_book='$data' WHERE tbl_drug_drug_id='$drug_id'";
        }
        else if($type==2)
        {
            $sql="UPDATE tbl_drug_des SET benefits_feature='$data' WHERE tbl_drug_drug_id='$drug_id'";
        }
        else
        {
            $sql="UPDATE tbl_drug_des SET drug_image='$data' WHERE tbl_drug_drug_id='$drug_id'";
        }
        $result=$this->db->query($sql);
        return $result;
    }

    public function get_new_version_id($doc_type,$drug_id)
    {
        $sql="SELECT version_id from tbl_drug_detail_version WHERE  tbl_doctor_type_doc_type_id='$doc_type' AND tbl_drug_drug_id='$drug_id' ORDER BY version_id DESC limit 1";
        $query=$this->db->query($sql);
        if ($query->num_rows() > 0)
        {
            $res=$query->result();
            $row=$res[0];
            $id=$row->version_id;
            $id=$id+1;
            $sql2="INSERT INTO tbl_drug_detail_version(version_id,tbl_doctor_type_doc_type_id,tbl_drug_drug_id) VALUES ($id,$doc_type,$drug_id)";
        }
        else
        {
            $sql2="INSERT INTO tbl_drug_detail_version(version_id,tbl_doctor_type_doc_type_id,tbl_drug_drug_id) VALUES ('1',$doc_type,$drug_id)";
        }
        $this->db->query($sql2);
        $sql3="SELECT detail_version_id from tbl_drug_detail_version WHERE  tbl_doctor_type_doc_type_id='$doc_type' AND tbl_drug_drug_id='$drug_id' ORDER BY version_id DESC limit 1";
        $result=$this->db->query($sql3);
        return $result->result_array();
    }

    public function insert_version_data($version_id,$point1,$point2,$point3,$audio1_test,$audio2_test,$audio3_test,$drug_audio_test,$image_test)
    {
        $sql="UPDATE tbl_drug_detail_version SET drug_name_audio='$drug_audio_test',drug_detail_image='$image_test',point1='$point1',point2='$point2',point3='$point3',audio1='$audio1_test',audio2='$audio2_test',audio3='$audio3_test' WHERE detail_version_id='$version_id'";
        $result=$this->db->query($sql);
        return $result;
    }

    public function getAllMed()
    {
        $sql='SELECT * FROM tbl_drug d,tbl_drug_des dd WHERE d.drug_id=dd.tbl_drug_drug_id';
        $result=$this->db->query($sql);
        return $result->result_array();
    }

    public function delete_drug($drug_des_id,$type)
    {
        if($type==1)
        {
            $sql="UPDATE tbl_drug_des SET drug_full_book='' WHERE drug_des_id='$drug_des_id'";
        }
        else
        {
            $sql="UPDATE tbl_drug_des SET benefits_feature='' WHERE drug_des_id='$drug_des_id'";
        }
        $result=$this->db->query($sql);
        return $result;
    }

}