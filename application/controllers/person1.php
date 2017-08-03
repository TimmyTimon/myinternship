<?php
class Person1 extends CI_Controller{
	public function _construct(){
		parent:: _construct;
	}

	public function index(){

		//Loading the form validation library
		$this->load->library('form_validation');

		//Validating the college name
 	 	$this->form_validation->set_rules('college','College','required');

 	 	//Validating the degree
 	 	$this->form_validation->set_rules('degree','Degree','required');

 	 	//Validating the phone number
 	 	$this->form_validation->set_rules('phone','Phone Number','required');

 	 	//Validating the P.O. Box
 	 	$this->form_validation->set_rules('box','P.O. Box','required');

 	 	//Validating the  email
 	 	$this->form_validation->set_rules('pemail','Email address','required');
           
           if($this->form_validation->run() ==FALSE){
           	$this->load->view('personforms1');
           }else{

           	   	//Setting the values for the table educational_info
 	 		$mydata1=array(
         'college'=>$this->input->post('college'),
         'degree'=>$this->input->post('degree')
       	);

 	 		$mydata2=array(
      'phone_no'=>$this->input->post('phone'),
      'po_box'=>$this->input->post('box'),
      'email'=>$this->input->post('pemail')
 			);
           //Loading the model
 	 		$this->load->model('persondb');
 	 		//Transferring data to the model
 	 		//$this->persondb->inputEducation($mydata1);

            //Loading the model method
            $this->persondb->eduContact($mydata1,$mydata2);

            $data['details']=$this->persondb->getTables();

 	 		//Loading the view 
 	 		$this->load->view('table',$data);

           }

	}
}
?>