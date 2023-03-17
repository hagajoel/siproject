<?php
	class Home extends CI_Controller {
		public function index() {
			$data['title'] = "Home";
			$this->load->view('template/header', $data);
			$this->load->view('page/home');
			$this->load->view('template/ending');
		}
	}
?>
