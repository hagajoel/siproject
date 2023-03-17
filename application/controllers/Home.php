<?php
	class Home extends CI_Controller {
		public function index() {
			$data['title'] = "Home";
			$this->load->view('template/header');
			$this->load->view('page/home', $data);
			$this->load->view('template/ending');
		}
	}
?>
