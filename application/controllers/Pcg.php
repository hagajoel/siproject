<?php
	class Pcg extends CI_Controller
	{
		public function index() {
			$data['title'] = "Plan Comptable de Gestion";
			$this->load->view('template/header',$data);
			$this->load->view('page/pcg');
			$this->load->view('template/ending');
		}
	}

?>
