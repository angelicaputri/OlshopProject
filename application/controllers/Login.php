<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_users');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_login');
		} else {
			$this->load->model('model_users');
			$valid_user = $this->model_users->check_credential();
			
			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','Wrong Username / Password!');
				redirect('Login');
			} else {
				// if the username and password is a match
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('group', $valid_user->group);
				
				switch($valid_user->group){
					case 1 : //admin
					redirect('admin/Products'); 
					break;
					case 2 : //member
					redirect(base_url());
					break;
					default: break; 
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('form_login');
	}

	public function create(){
		$this->form_validation->set_rules('nama','Nama','required|max_length[100]');
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('email','Email','required|valid_email|max_length[100]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[8]');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('registrasi');
		}else{
			$user = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'password' => $this->input->post('password'),
				'group' => 2
			);
			$this->model_users->create($user);
			$this->session->set_flashdata('message','<script langue="javascript">window.alert("Register Berhasil")</script>');
			$this->load->view('form_login');
		}
	}
}