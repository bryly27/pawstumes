<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rest_text extends CI_Controller {

	public function reserved()
	{
		$this->load->view('rest_text/reserved');
	}

	public function standBy()
	{
		$this->load->view('rest_text/standBy');
	}

	
}

//end of main controller