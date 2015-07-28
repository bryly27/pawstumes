<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developers extends CI_Controller {

	public function index()
	{
		$this->load->view('developers/developers');
	}


	
}

//end of main controller