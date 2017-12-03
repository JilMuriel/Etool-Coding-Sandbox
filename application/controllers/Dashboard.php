<?php
class Dashboard extends CI_Controller {
    public function index() {
        $data['title'] = 'Welcome ';
    	$this->load->view('templates/header', $data);
        // $this->load->view('templates/header_content');
    	$this->load->view('dashboardv1_view');
    	$this->load->view('templates/footer');
    }
    public function admin_dashboard($id = '') {
        $data['title'] = 'Welcome ';
        $this->load->model('User_model');
        $result = $this->User_model->getreq();
        $where = array('cId' => $id); 
        $this->User_model->deleteRecord('tbl_user_student',$where);
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/header_content');
        $this->load->view('admin_dashboard_view',$result);
        $this->load->view('templates/footer');
    }
    public function instructor_dashboard($id = '') {
        $data['title'] = "Welcome";
         $this->load->model('User_model');
        $result = $this->User_model->getreq2(); 
        $where = array('cId' => $id); 
        $this->User_model->deleteRecord('tbl_user_student',$where);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_content');
        $this->load->view('instructor_dashboard_view', $result);
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
    public function user_profile($id = '') {
        $data['title'] = 'Etool';
        $this->load->model('User_model');
        $where = array('cId' => $id); 
        $result = $this->User_model->getreq1($id);
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/header_content');
        $this->load->view('admin_profile_viewer',$result);
        $this->load->view('templates/footer');
    }
    public function delete($id = '') {
      $this->load->model('User_model');
      $where = array('user_no' => $id); 
      $this->dbmodel->deleteRecord('tbl_user_student',$where);
}
}