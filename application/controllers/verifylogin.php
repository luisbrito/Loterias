<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

	function __construct() {
		parent::__construct();
		
	}
	
	function index() {
		$this->load->helper(array('form', 'url'));
		$url = base_url();
		$session_ok = $this->session->userdata('logged_in');
		$data['url'] = $url;
		$data['field_selected'] = 0; //INICIO
		$data['session_ok'] = $session_ok;
		$this->load->model('user','',TRUE);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

		if($session_ok) {
			redirect('inicio', 'refresh');
		}
		if($this->form_validation->run() == FALSE) {
			//Field validation failed.  User redirected to login page
			$this->load->view('header', $data);
			$this->load->view('login_view');
			$this->load->view('footer', $data);
		}
		else {
			//Go to private area
			redirect('inicio', 'refresh');
		}
		
	}
		
	function check_database($password) {
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
		
		//query the database
		$result = $this->user->login($username, $password);
		
		if($result) {
			$sess_array = array();
			foreach($result as $row) {
				$sess_array = array(
					'iduser' => $row->iduser,
					'username' => $row->username,
					'nombre' => $row->nombre
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else {
			$this->form_validation->set_message('check_database', 'Usuario o contrase&ntilde;a inv&aacute;lida');
			return false;
		}
	}
}
?>