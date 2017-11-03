<?php
class User extends CI_Controller {
    public function index() {
        $data['title'] = 'Login';
    	$this->load->view('templates/header', $data);
    	$this->load->view('login_view');
    	$this->load->view('templates/footer');
    }
    public function validate_user() {
        $data['title'] = 'Validate ID';
        $this->load->view('templates/header', $data);
        $this->load->view('enter_id_view');
        $this->load->view('templates/footer');
    }
    public function create_account() {
        $data['title'] = 'Create account';
    	$this->load->view('templates/header', $data);
    	$this->load->view('create_account_view');
    	$this->load->view('templates/footer');
    }

}