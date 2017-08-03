<?php
 
 class Person extends CI_Controller{

 	public function _construct(){
 		parent::_construct;
 		$this->load->helper('url');
 		
 	}

 	public function display(){
 		$this->load->view('personview');


 	}
 	 public function index(){
    //Including library validation
 	 	$this->load->library('form_validation');

 	 	//Valdating the first name
 	 	$this->form_validation->set_rules('fname','First Name','required');

 	 	//Validating the last name
 	 	$this->form_validation->set_rules('lname','Last Name','required');

 	 	//Validating the date of birth
 	 	$this->form_validation->set_rules('dob','Date of birth','required');

 	 	

 	 	if($this->form_validation->run() == FALSE)
 	 	{
 	 		$this->load->view('personforms');
 	 	}
 	 	else{
 	 		//Setting the values for the table personal_details
 	 		$mydata=array(
   'fname'=>$this->input->post('fname'),
   'lname'=>$this->input->post('lname'),
   'dob'=>$this->input->post('dob'),
   'sex'=>$this->input->post('gender')
    	);

      //Loading the model
      $this->load->model('persondb');
     
     //Transferring the data to model
 	 		$this->persondb->inputDetails($mydata);

 	 
 			//Loading the view 
 			$this->load->view('personforms1');

 	 	}

 	 }
 }
 ?>