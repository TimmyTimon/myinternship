<?php

class Blog extends CI_Controller{
	public function index(){
    //Loading the url helper
		$this->load->helper('url');
		//Loading the image helper
		$this->load->helper('html');

		//Loading the directory helper
		$this->load->helper('directory');

		$this->load->view('personview');
			}
}