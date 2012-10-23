<?php
class Clientes extends CI_Controller {

	function index() {
		$this->load->helper('url');
		$session_ok = $this->session->userdata('logged_in');
		$data['session_ok'] = $session_ok;
		$data['field_selected'] = 1; //Clientes
		if ($session_ok) {
			$this->load->model('clientes_m');
			$clientes = $this->clientes_m->get_clientes();
			$data['clientes'] = $clientes;
			$this->load->view('header', $data);
			$this->load->view('clientes_view', $data);
			$this->load->view('footer', $data);
		}
		else {
			redirect('login', 'refresh');
		}
	}
}
?>