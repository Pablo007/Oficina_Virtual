<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home_client extends CI_Controller {

	public function index()
	{
		$this->load->view('head');
		$this->load->view('Headers/header2');
		$this->load->view('Usuario/resumen');
		$this->load->view('footer');

	}

	public function Historial_pagos_cl()
	{
		$this->load->view('head');
		$this->load->view('Headers/header2');
		$this->load->view('Usuario/histo_pagos');
		$this->load->view('footer');
	}

	public function Solictar_baja()
	{
		$this->load->view('head');
		$this->load->view('Headers/header2');
		$this->load->view('Usuario/solicitar_baja');
		$this->load->view('footer');
	}

}
?>