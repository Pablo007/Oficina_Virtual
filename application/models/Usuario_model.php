<?php
class Usuario_model extends CI_Model {
	public function_construct() {
		parent::__construct();
		$this->load->database();
	}

	function consultar_historial(){
		$histo_client = $this->bd->histo_client("select * from historial_pagos");
		if($histo_client) return $histo_client;
		else return false;
	}
}

?>