<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Journal extends CI_Controller
	{
		public function index() {
			$data['title'] = "Journal";
			$this->load->view('template/header',$data);
			$this->load->view('page/journal');
			$this->load->view('template/ending');
		}
	}

?>
