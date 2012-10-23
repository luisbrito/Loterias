<?php
class Sorteo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	function index($sorteo) {
		$data['sorteo'] = $sorteo;
		$this->load->view('footer', $data);
	}
}
?>