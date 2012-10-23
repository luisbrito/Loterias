<?php
class Logout extends CI_Controller {
	function index() {
		$this->load->helper('url');
		$url = base_url();
		$this->session->unset_userdata('logged_in');
		//session_destroy();
		redirect('login', 'refresh');

	}
}