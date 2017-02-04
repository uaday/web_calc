<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pso_model extends CI_Model {

    public function lcheck($name,$pass)
    {
        $sql="SELECT * FROM users WHERE username='$name' and password='$pass'";
        $this->load->database();
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function get_district($div_id)
    {
        $sql="SELECT * FROM tbl_district WHERE tbl_division_division_id='$div_id'";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function get_region($dis_id)
    {
        $sql="SELECT * FROM tbl_region WHERE tbl_district_district_id='$dis_id'";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function insert_pso($pso_renata_id,$pso_name,$pso_gender,$pso_dob,$pso_email,$pso_phone,$pso_des,$pso_password,$pso_image,$pso_group_id,$pso_region_id)
    {
        $sql="INSERT INTO tbl_user_pso (renata_id,pso_name,pso_gender,pso_dob,pso_email,pso_phone,pso_designation,pso_password,pso_image,status,tbl_pso_group_pso_group_id,tbl_region_region_id) VALUES('$pso_renata_id','$pso_name','$pso_gender','$pso_dob','$pso_email','$pso_phone',',$pso_des',md5('$pso_password'),'$pso_image',1,'$pso_group_id','$pso_region_id')";
        $this->db->query($sql);
    }

    public function select_all_pso()
    {
        $sql="SELECT * FROM tbl_user_pso p,tbl_region r WHERE p.tbl_region_region_id=r.region_id ORDER BY p.pso_id";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function update_password($pso_id,$pso_password)
    {
        $sql="UPDATE tbl_user_pso SET pso_password=md5('$pso_password') WHERE pso_id='$pso_id'";
        $this->db->query($sql);
    }
    public function delete_account($pso_id)
    {
        $sql="DELETE FROM tbl_user_pso WHERE pso_id='$pso_id'";
        $this->db->query($sql);
    }
    public function select_pso_by_pso_id($pso_id)
    {
        $sql="SELECT * FROM tbl_user_pso p,tbl_division d,tbl_district dd,tbl_region r WHERE p.tbl_region_region_id=r.region_id AND dd.district_id=r.tbl_district_district_id AND d.division_id=dd.tbl_division_division_id AND pso_id='$pso_id'";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function update_pso($pso_renata_id,$pso_name,$pso_gender,$pso_dob,$pso_email,$pso_phone,$pso_des,$pso_image,$pso_region_id,$pso_id)
    {
        if($pso_image=='')
        $sql="UPDATE tbl_user_pso SET renata_id='$pso_renata_id',pso_name='$pso_name',pso_gender='$pso_gender',pso_gender='$pso_gender',pso_dob='$pso_dob',pso_email='$pso_email',pso_phone='$pso_phone',pso_designation='$pso_des',tbl_region_region_id='$pso_region_id' WHERE pso_id='$pso_id'";
        else
        $sql="UPDATE tbl_user_pso SET renata_id='$pso_renata_id',pso_name='$pso_name',pso_gender='$pso_gender',pso_gender='$pso_gender',pso_dob='$pso_dob',pso_email='$pso_email',pso_phone='$pso_phone',pso_designation='$pso_des',pso_image='$pso_image',tbl_region_region_id='$pso_region_id' WHERE pso_id='$pso_id'";
        $this->db->query($sql);
    }
}