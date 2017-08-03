<?php
class First extends CI_Controller{

	public function index(){
		echo "This is the first trial in a long, long time.";
		$this->load->view('firstview');
	}
}