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
					else if(strlen(trim($num)) < 5){
						$data['num'] = 1;
						$this->load->view('page/pcg',$data);	
					}else{
						$a = $this->user_model->insertPcg($num,trim($intitule),$_SESSION['id_entreprise']);
						if($a == -1){
							$dat['contains'] = $_POST['numero'];
							$this->load->view('page/pcg',$dat);	
						}else{
							header("Refresh:0");
							$this->load->view('page/pcg');	
						}
					}
				}
			}else{
				$this->load->view('page/pcg');
			}
			$this->load->view('components/footer');
			$this->load->view('template/ending');
		}

		public function pcgCsv(){
			session_start();
			$path_parts = pathinfo($_FILES["csv"]["name"]);
			$extension = $path_parts['extension'];
			if($_FILES['csv']['tmp_name'] == '' || $_FILES['csv']['tmp_name'] == NULL){
				redirect(site_url('pcg/index/69'));
			}
			if(strtolower($extension) != "csv"){
				redirect(site_url('pcg/index/96'));
			}else{
				$ret = $this->user_model->importPcgScv($_FILES['csv']['tmp_name'],$_SESSION['id_entreprise']);
				redirect(site_url('pcg/index/' . $ret));
			}
		}

		public function delete($id){
			$this->user_model->delete($id);
			redirect(site_url('pcg'));
		}

		public function search(){
			$data['pcg'] = $this->user_model->res_search($_GET['search']); 
			$data['title'] = "Résultat recherche";
			$this->load->view('template/header',$data);
			$this->load->view('page/recherche');
			$this->load->view('components/footer');
			$this->load->view('template/ending');
		}

		public function modif(){
			$this->user_model->modif($id,$_POST['compte'],$_POST['intitule']);
		}
	}
?>