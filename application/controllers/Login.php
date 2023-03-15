<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($error = 0)
	{
        $data['err'] = $error;
        $data['title'] = 'Login';
		$this->load->view('welcome_message'); // modifiena par vue hafa
	}

    public function inscription(){
        $data['title'] = 'Inscription';
    }

    public function log(){
        if($this->input->post()){
            $this->form_validation->set_rules('nom','nom','required',array('required' => 'Ce champ doit-être rempli'));
            $this->form_validation->set_rules('pwd','mot de passe','required',array('required' => 'Ce champ doit-être rempli'));
            if($this->form_validation->run() === FALSE){
                $this->load->view('login');
            }else{
                $this->load->model('sign_model');
                $res = $this->sign_model->checkSignIn($_POST['nom'],$_POST['pwd']);
                if($res == 3){
                    redirect(site_url('home/error/3'));
                }
            }
            $data['title'] = "Ajout";
        }
    }
}