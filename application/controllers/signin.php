<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {
    public function __CONSTRUCT(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('authmodel', 'am');
    }

	public function index(){
		$this->load->view('header');
        $this->load->view('auth/signin.php');
        $this->load->view('footer');
	}

	public function signin(){
		$error = '';

		$r = $this->am->signin(
			$this->input->post('email'),
			$this->input->post('password')

		);

		if (isset($r->result)){
			RestApi::setToken($r->result);

			$user = RestApi::getUserData();



			if ($user->is_admin) {
				redirect('home');
			}
			else {
				RestApi::destroyToken();
				$error = 'You dont have permissions';
			}

		}else if (isset($r->errors)){
			$this->load->view('header');
	        $this->load->view('auth/signin.php', [
	        	'errors' => $r->errors
	        ]);
	        $this->load->view('footer');

		}else {
			$error = $r->error;
		}

		$this->load->view('header');
        $this->load->view('auth/signin.php', [
        	'error' => $error
        ]);
        $this->load->view('footer');
	}
}
