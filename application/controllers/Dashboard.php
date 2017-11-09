<?php
class Dashboard extends CI_Controller {
    public function index() {
        $data['title'] = 'Welcome ';
    	$this->load->view('templates/header', $data);
        $this->load->view('templates/header_content');
    	$this->load->view('dashboard_view');
    	$this->load->view('templates/footer');
    }
    public function admin_dashboard() {
        $data['title'] = 'Welcome ';
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/header_content');
        $this->load->view('admin_dashboard_view');
        $this->load->view('templates/footer');
    }
    public function create_project() {
        $data['title'] = 'Create Project';
        $this->load->view('templates/header' , $data);
        $this->load->view('create_project_view');
        $this->load->view('templates/footer');
    }
    public function create_database() {
        $data['title'] = 'Database Name';
        $this->load->view('templates/header' , $data);
        $this->load->view('create_database_view');
        $this->load->view('templates/footer');
    }
    public function project() {
        $data['title'] = 'Etool';
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/header_content');
        $this->load->view('project_view');
        $this->load->view('templates/footer');
    }
    public function project_result() {
        $data['title'] = 'Etool Result';
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/header_content');
        $this->load->view('project_result');
        $this->load->view('templates/footer');
    }
}