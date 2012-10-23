<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function index(){
		$this->load->helper(array('form', 'url'));
		$url = base_url();
		$session_ok = $this->session->userdata('logged_in');
		$data['url'] = $url;
		$data['field_selected'] = 0; //ÏNICIO
		$data['session_ok'] = $session_ok;
		$this->load->model('user','',TRUE);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		if($session_ok) {
			redirect('inicio', 'refresh');
		}
		else {
			$this->load->view('header', $data);
			$this->load->view('login_view');
			$this->load->view('footer', $data);
		}
	}


}

?>