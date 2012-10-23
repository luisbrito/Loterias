<?php
class Numeros extends CI_Controller {

	function index() {
		$this->load->helper('url');
		$session_ok = $this->session->userdata('logged_in');
		$data['session_ok'] = $session_ok;
		$data['field_selected'] = 3	; //Numeros
		if ($session_ok) {
			$this->load->model('sorteos_m');
			$sorteos = $this->sorteos_m->get_sorteos();
			$data['sorteos'] = $sorteos;
			$this->load->view('header', $data);
			$this->load->view('numeros_view', $data);
			$this->load->view('footer', $data);
		}
		else {
			redirect('login', 'refresh');
		}
	}
	
	function ver($sorteo) {
		$session_ok = $this->session->userdata('logged_in');
		if (!$session_ok) {
			redirect('login', 'refresh');
		} //Fin autenticacion
		
		if (!is_integer($sorteo)) {//No es entero
			$data['mensaje'] = "El par&aacute;metro '$sorteo' no es un entero";
			$this->load->helper('url');
			
			$data['session_ok'] = $session_ok;
			$data['field_selected'] = 2	; //Sorteo
			
				$this->load->model('clientes_m');
				$clientes = $this->clientes_m->get_clientes();
				$this->load->model('sorteos_m');
				$sorteos = $this->sorteos_m->get_sorteos();
				$data['clientes'] = $clientes;
				$data['sorteos'] = $sorteos;
				$this->load->view('header', $data);
				$this->load->view('sorteos_view', $data);
				$this->load->view('footer', $data);

			//index();
			//redirect('sorteos', 'refresh');
			
		}
		else {
			echo "el sorteo introducido es: ".$sorteo;
		}
	}
}
?>