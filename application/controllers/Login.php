<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
    }

    public function index(){
        redirect(site_url('login/sign_in'));
    }

	public function sign_in($error = 0)
	{
        session_start();
        $data['err'] = $error;
        $data['title'] = 'Login';
        $this->load->view('template/header',$data);
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
                    $this->load->view('page/login',$data);
                }else{
                    redirect(site_url('home'));
                }
            }
        }else{
            $this->load->view('page/login');
        }
        $this->load->view('template/ending');
	}

    public function inscription(){
        $data['title'] = 'Inscription';

        $this->load->view('template/header');
        $this->load->view('page/add');
        $this->load->view('template/ending');
        if ($this->input->post()) {
            $ar = ['nom','pwd','objet','adresse','nif','stat','rcs','debut','devise'];
            for ($i=0; $i < count($ar) - 1; $i++) {
                $this->form_validation->set_rules($ar[$i],$ar[$i],'required',array('required' => 'Ce champ doit-être rempli'));
            }
            $this->form_validation->set_rules('devise','devise','required',array('required' => 'Vous devez sélectionner une devise'));
        }
    }
}
