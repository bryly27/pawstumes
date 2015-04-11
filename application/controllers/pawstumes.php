<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pawstumes extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	// $this->output->enable_profiler();
	// }

	public function index()
	{
		$this->load->model('Paw');
		$array['pets'] = $this->Paw->get_all(); 
		$this->load->view('main', $array);
	}

	public function admin_login()
	{
		$this->load->view('admin');
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("username","Username","trim|required");

		if($this->input->post('action') == 'login')
		{

			$this->load->model('Paw');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$user = $this->Paw->get_user($username);
		
			if ($user && $user['password']==$password) 
			{		
				$this->session->set_userdata('userInfo', $user);
				$this->session->set_userdata('log', true);
				redirect('/pawstumes/admin_home');
			}
			else
			{
				$this->session->set_userdata('log', false);
				redirect('/pawstumes/admin_login');
			}
		}
		else 
		{
			redirect('/pawstumes/admin_login');
		}
	}

	public function admin_home()
	{
		if($this->session->userdata('log') == true)
		{	
			$this->load->model('Paw');
			$array['pets'] = $this->Paw->get_all(); 
			$this->load->view('admin_home', $array);
		}
		else 
		{
			redirect('/pawstumes/admin_login');
		}
	}

	public function add_photo()
	{
		if($this->session->userdata('log') == true)
		{
			$this->load->model('Paw');
			$this->Paw->add_pet($this->input->post());
			redirect('/pawstumes/admin_home');
		}
		else
		{
			redirect('/pawstumes/admin_login');
		}
	}

	public function delete($id)
	{
		if($this->input->post('action') == 'delete')
		{
			$this->load->model('Paw');
			$this->Paw->delete($id);
			redirect('/pawstumes/admin_home');
		}
		else
		{
			$this->session->sess_destroy();
			redirect('/');
		}
	}

	public function edit()
	{
		if($this->input->post('action') == 'edit')
		{
			$this->load->model('Paw');
			$this->Paw->edit($this->input->post());
			redirect('/pawstumes/admin_home');
		}
		else
		{
			$this->session->sess_destroy();
			redirect('/');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/pawstumes/admin_login');
	}
}

//end of main controller