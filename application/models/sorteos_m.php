
<?php
Class Sorteos_m extends CI_Model {
	function get_sorteos_actuales() {
		$this -> db -> select('idSorteo, nombre, importancia, precioDecimo, fecha, debito, observaciones');
		$this -> db -> from('sorteos');
		$this -> db -> order_by('fecha', "desc");
		$this -> db -> limit(10);
		$query = $this -> db -> get();
		return $query->result();
	}
	function get_sorteos() {
		$this -> db -> select('idSorteo, nombre, importancia, precioDecimo, fecha, debito, observaciones');
		$this -> db -> from('sorteos');
		$this -> db -> order_by('fecha', "desc");
		$query = $this -> db -> get();
		return $query->result();
	}
}
?>