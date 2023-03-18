<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
		public function index() {
			session_start();
			$data['title'] = "Home";
			$this->load->view('template/header', $data);
			$this->load->view('page/home');
			$this->load->view('template/ending');
		}
	}
?>