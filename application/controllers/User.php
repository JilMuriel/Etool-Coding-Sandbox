<?php
class User extends CI_Controller {
    public function index() {
    	$this->load->view('templates/header');
    	$this->load->view('login_view');
    	$this->load->view('templates/footer');
    }
    public function create_account() {
    	$this->load->view('templates/header');
    	$this->load->view('create_account_view');
    	$this->load->view('templates/footer');
    }
}