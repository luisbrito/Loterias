<?php
class Entrada extends CI_Controller {
	function index() {
		$this->load->helper('url');
		$session_ok = $this->session->userdata('logged_in');
		$data['session_ok'] = $session_ok;
		if ($session_ok) {
			$url=base_url()."index.php/inicio";
			redirect($url, 'refresh');
		}
		else {
			$url=base_url()."index.php/login";
			redirect($url, 'refresh');
		}
	}
}
?>
