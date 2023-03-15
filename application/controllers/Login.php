<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($error = 0)
	{
        $data['err'] = $error;
        $data['title'] = 'Login';
        $this->load->view('template/header.php',$data);
        if($this->input->post()){
            $this->form_validation->set_rules('nom','nom','required',array('required' => 'Ce champ doit-être rempli'));
            $this->form_validation->set_rules('pwd','mot de passe','required',array('required' => 'Ce champ doit-être rempli'));
            if($this->form_validation->run() === FALSE){
                $this->load->view('page/login');
            }else{
                $this->load->model('sign_model');
                $res = $this->sign_model->checkSignIn($_POST['nom'],$_POST['pwd']);
                if($res == 3){
                    $data['err'] = 3;
                    $this->load->view('page/login');
                }
            }
        }else{
            $this->load->view('page/login');
        }
        $this->load->view('template/ending.php');
	}

    public function inscription(){
        $data['title'] = 'Inscription';
    }
}