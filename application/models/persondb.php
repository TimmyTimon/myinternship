<?php
 class Persondb extends CI_Model{

 	public function construct(){
 		parent::_construct();
 		$this->load->database();
 	}

 	public function inputDetails($mydata){
 		$this->load->database();

    
    $this->db->insert('personal_details',$mydata);
 	}


    public function eduContact($mydata1,$mydata2){
     $this->load->database();

        $this->db->trans_start();
        $query=$this->db->insert('educational_info',$mydata1);
        $query=$this->db->insert('contact_details',$mydata2);
        $this->db->trans_complete();
    }

    public function getTables(){
        $this->load->database();

        $this->db->select('personal_details.ID,personal_details.fname, personal_details.lname, personal_details.dob,personal_details.sex,educational_info.edu_id,
            educational_info.college,educational_info.degree,contact_details.cont_id,contact_details.phone_no,
            contact_details.po_box,contact_details.email,contact_details.per_id');
        $this->db->from('personal_details');
        $this->db->join('educational_info', 'educational_info.per_id= personal_details.ID');
        $this->db->join('contact_details','contact_details.per_id=personal_details.ID');
        $query=$this->db->get();
        return $query->result_array();
    }


 }