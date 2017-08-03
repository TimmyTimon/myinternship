<?php
class Person2 extends CI_Controller{
	public function construct(){
		parent:: _construct;
	}

	public function index(){
		//Loading the validation library
		$this->load->library('form_validation');

		//Validating the phone number
 	 	$this->form_validation->set_rules('phone','Phone Number','required');

 	 	//Validating the P.O. Box
 	 	$this->form_validation->set_rules('box','P.O. Box','required');

 	 	//Validating the  email
 	 	$this->form_validation->set_rules('pemail','Email address','required');
        
        if($this->form_validation->run() ==FALSE){
        	$this->load->view('personforms2');
        }else{
        	

        	 	//Setting the values for the table contact_details
 	 		$mydata2=array(
      'phone_no'=>$this->input->post('phone'),
      'po_box'=>$this->input->post('box'),
      'email'=>$this->input->post('pemail')
 			);

 			//Loading the model
        	$this->load->model('persondb');

 			//Transferring the data to the model
 			$this->persondb->inputContacts($mydata2);

 			//Loading the view 
 			$this->load->view('table');
        }
	}
}
?>