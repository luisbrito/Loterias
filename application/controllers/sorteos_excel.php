<?php
class Clientes_excel extends CI_Controller {

	function index() {

		$this->load->model('sorteos_m');
		$clientes = $this->sorteos_m->get_sorteos();
		$result = "<table>";
		$result .= "<tr><td style='background-color:#9FF781;'>ID</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>Nombre y apellidos</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>DNI</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>Tel&eacute;fono</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>Debe</td>";
		$result .= "<td style='background-color:#9FF781; text-align: center;'>Observaciones</td>";
		foreach ($sorteos as $sorteo){
			if (strtotime($sorteo->fecha) < time()) { //Sorteo finalizado
				$table .= "<tr>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".$sorteo->idSorteo."</a></td>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".$sorteo->nombre."</a></td>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".$sorteo->precioDecimo."</a></td>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".date("d-m-Y", strtotime($sorteo->fecha))."<i style=\"color: red;\"> (Finalizado)</i></a></td>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".$sorteo->importancia."</a></td>";
				$table .= "</tr>";
			}
			else {//Sorteo no finalizado
				$table .= "<tr>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".$sorteo->idSorteo."</a></td>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".$sorteo->nombre."</a></td>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".$sorteo->precioDecimo."</a></td>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".date("d-m-Y", strtotime($sorteo->fecha))."</a></td>";
				$table .= "<td><a href=\"sorteo/$sorteo->idSorteo\">".$sorteo->importancia."</a></td>";
				$table .= "</tr>";
			}
		
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