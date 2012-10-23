<?php
class Clientes_excel extends CI_Controller {

	function index() {
		$this->load->helper('url');
		$session_ok = $this->session->userdata('logged_in');
		if (!$session_ok) {
			redirect('login', 'refresh');
		}
		$data['session_ok'] = $session_ok;

		$this->load->model('clientes_m');
		$clientes = $this->clientes_m->get_clientes();
		$result = "<table>";
		$result .= "<tr><td style='background-color:#9FF781;'>ID</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>Nombre y apellidos</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>DNI</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>Tel&eacute;fono</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>Debe</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>Observaciones</td>";
		$total = 0;
		$deudas = 0;
		foreach ($clientes as $cliente){
			if ($cliente->debe > 0){
				$deudas++;
			}
			$total = $total + $cliente->debe;
			$result .= "<tr>";
			$result .= "<td>".$cliente->codigoCliente."</td>";
			$result .= "<td>".$cliente->nombre."</td>";
			$result .= "<td>".$cliente->dni."</td>";
			$result .= "<td>".$cliente->telefono."</td>";
			$result .= "<td style='text-align: right;'>".number_format($cliente->debe,2,".",",")." &euro;</td>";
			$result .= "<td>".$cliente->observaciones."</td>";
			$result .= "</tr>";
		}
		$result .= "<tr><td></td><td></td><td></td><td style='background-color:#9FF781;'>";
		$result .= "Totat:</td><td style='background-color:#9FF781;text-align: right;'><b>";
		$result .= number_format($total,2,".",",")." &euro;</b></td></tr>";
		$result .= "<tr>Actualmente hay ".count($clientes)." clientes registrados. De estos, ".$deudas." tienen deudas.</tr></table>";
		header("Content-type: application/vnd-ms-excel; charset=iso-8859-1");
		header("Content-Disposition: attachment; filename=Clientes_".date('d-m-Y').".xls");
		echo $result;
    }
}