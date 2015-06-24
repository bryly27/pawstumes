<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rest_text extends CI_Controller {

	public function index()
	{
		$this->load->view('rest_text/reserved');
	}

	
}

//end of main controller