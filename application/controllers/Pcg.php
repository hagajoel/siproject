<?php
	class Pcg extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');
		}
		
		public function index($er=0) {
			session_start();
			$data['pcg'] = $this->user_model->getPcg($_SESSION['id_entreprise']);
			$data['title'] = "Plan Comptable de Gestion";
			$data['err'] = $er;
			$this->load->view('template/header',$data);
			if($this->input->post()){
				$this->form_validation->set_rules('numero','numero','required|min_length[5]|max_length[5]',array('required' => 'Ce champ doit-être rempli','min_length' => 'Doit comporter 5 caractères (enlever les espaces)','max_length' => 'Doit comporter 5 caractères (enlever les espaces)'));
				$this->form_validation->set_rules('intitule','intitule','required',array('required' => 'Ce champ doit-être rempli'));
				if($this->form_validation->run() === FALSE){
					$this->load->view('page/pcg');
				}else{
					$num = $_POST['numero'];
					$intitule = $_POST['intitule'];
					if(!is_numeric($num)){
						$data['num'] = 2;
						$this->load->view('page/pcg',$data);	
					}
					if(strlen(trim($num)) < 5){
						$data['num'] = 1;
						$this->load->view('page/pcg',$data);	
					}else{
						$this->user_model->insertPcg($num,trim($intitule),$_SESSION['id_entreprise']);
						$this->load->view('page/pcg');	
					}
				}
			}else{
				$this->load->view('page/pcg');
			}
			$this->load->view('template/ending');
		}

		public function pcgCsv(){
			session_start();
			$ret = $this->user_model->importPcgScv($_FILES['csv']['tmp_name'],$_SESSION['id_entreprise']);
			redirect(site_url('pcg/index/' . $ret));
		}
	}
?>