<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tar_shop_model extends CI_Model {

    public function lcheck($name,$pass)
    {
        $sql="SELECT * FROM users WHERE username='$name' and password='$pass'";
        $this->load->database();
        $result=$this->db->query($sql);
        return $result->result_array();
    }

    public function insert_incentive($in_title,$in_description,$in_validation,$in_point,$in_quantity,$pp)
    {
        $sql="INSERT INTO tbl_incentives(incentives_name,incentives_description,incentives_image,create_date,status,exp_date,incentives_point,quantity) VALUES('$in_title','$in_description','$pp',now(),'1','$in_validation','$in_point','$in_quantity')";
        $this->db->query($sql);
        return $this->db->insert_id();
    }
    public function set_global($id)
    {
        $sql1="SELECT pso_id FROM tbl_user_pso";
        $result=$this->db->query($sql1);
        $row=$result->result_array();
        $i=count($row);
        for($j=0;$j<$i;$j++)
        {
            $pso_id=$row[$j]['pso_id'];
            $sql2="INSERT INTO tbl_incentives_transection(tbl_incentives_incentives_id,tbl_pso_pso_id,date) VALUES ('$id','$pso_id',now())";
            $this->db->query($sql2);

        }
    }

    public function get_region()
    {
        $sql="SELECT * FROM tbl_region";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function get_pso()
    {
        $sql="SELECT * FROM tbl_user_pso";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function set_region($id,$rid)
    {
        $sql1="SELECT pso_id FROM tbl_user_pso WHERE tbl_region_region_id='$rid'";
        $result=$this->db->query($sql1);
        $row=$result->result_array();
        $i=count($row);
        for($j=0;$j<$i;$j++)
        {
            $pso_id=$row[$j]['pso_id'];
            $sql2="INSERT INTO tbl_incentives_transection(tbl_incentives_incentives_id,tbl_pso_pso_id,date) VALUES ('$id','$pso_id',now())";
            $this->db->query($sql2);

        }
    }
    public function set_psos($id,$rid)
    {
        $sql2="INSERT INTO tbl_incentives_transection(tbl_incentives_incentives_id,tbl_pso_pso_id,date) VALUES ('$id','$rid',now())";
        $this->db->query($sql2);
    }

    public function show_all_booked_incentive()
    {
        $sql="SELECT * FROM tbl_incentives_transection t,tbl_user_pso p,tbl_incentives i WHERE p.pso_id=t.tbl_pso_pso_id AND i.incentives_id=t.tbl_incentives_incentives_id AND  booked_incentive='1' AND t.approve!='1'";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function show_all_incentive_history()
    {
        $sql="SELECT * FROM tbl_incentives_transection t,tbl_user_pso p,tbl_incentives i,tbl_incentives_history h WHERE h.tbl_incentives_transection_transection_id=t.transection_id AND p.pso_id=t.tbl_pso_pso_id AND i.incentives_id=t.tbl_incentives_incentives_id ";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function approve_transaction($id)
    {
        $sql1="UPDATE tbl_incentives_transection SET approve='1' WHERE transection_id='$id'";
        $this->db->query($sql1);
        $sql2="INSERT INTO tbl_incentives_history(approval_date,tbl_incentives_transection_transection_id) VALUES (now(),'$id')";
        $this->db->query($sql2);
    }

    public function get_transaction()
    {
        $sql="SELECT p.renata_id AS PSO_ID,p.pso_name AS NAME,r.region_name AS AREA,i.incentives_id AS INCENTIVE_ID, i.incentives_name AS INCENTIVE_NAME    FROM tbl_incentives_transection t,tbl_user_pso p,tbl_incentives i,tbl_region r WHERE p.tbl_region_region_id=r.region_id AND p.pso_id=t.tbl_pso_pso_id AND i.incentives_id=t.tbl_incentives_incentives_id AND  booked_incentive='1' AND t.approve!='1'";
        $result=$this->db->query($sql);
        return $result;
    }


}