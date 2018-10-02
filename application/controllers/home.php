<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    private $user;

    public function __CONSTRUCT(){
        parent::__construct();
        $this->user = RestApi::getUserData();
        if ($this->user === null) redirect('/');


        $this->data = [
            'title' => 'Home',
            'breadcrumb' => 'Home',
            'user' => $this->user,
        ];
    }
    
	public function index(){
		$this->load->view('header', $this->data);
        $this->load->view('home/index');
        $this->load->view('footer');
	}
    
    
}
