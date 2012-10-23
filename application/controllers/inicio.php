<?php
class Inicio extends CI_Controller {

	function index() {
		$this->load->helper('url');
		$session_ok = $this->session->userdata('logged_in');
		$data['session_ok'] = $session_ok;
		$data['field_selected'] = 0; //Ã�NICIO
		if ($session_ok) {
			$this->load->model('clientes_m');
			$clientes = $this->clientes_m->get_clientes_morosos();
			$this->load->model('sorteos_m');
			$sorteos = $this->sorteos_m->get_sorteos_actuales();
			$data['clientes'] = $clientes;
			$data['sorteos'] = $sorteos;
			$this->load->view('header', $data);
			$this->load->view('inicio_view', $data);
			$this->load->view('footer', $data);
		}
		else {
			redirect('login', 'refresh');
		}
	}
}
?>