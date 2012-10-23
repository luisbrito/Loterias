
<?php
Class Clientes_m extends CI_Model {
	function get_clientes_morosos() {
		$this -> db -> select('codigoCliente, nombre, telefono, debe');
		$this -> db -> from('clientes');
		$this -> db -> order_by('debe', "desc");
		$this -> db -> where('debe != 0');
		$this -> db -> limit(10);
		
		$query = $this -> db -> get();
		return $query->result();
	}
	function get_clientes() {
		$this -> db -> select('*');
		$this -> db -> from('clientes');
		$this -> db -> order_by('codigoCliente');
		
		$query = $this -> db -> get();
		return $query->result();
	}
	
}
?>