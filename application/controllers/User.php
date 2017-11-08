<?php
class User extends CI_Controller {
    public function index() {
        if ($this->session->userdata('session')) {
            redirect('dashboard');
        }
        else {
            $data['title'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('login_view');
            $this->load->view('templates/footer');
        }
    }
    public function login() {
        $this->form_validation->set_rules('txtusername', 'Username','trim|required');
        $this->form_validation->set_rules('txtpassword', 'Password','trim|required');

        if ($this->form_validation->run() == FALSE) {
            redirect('user');
        } else {
            $username = $this->security->xss_clean($this->input->post('txtusername'));
            $password = $this->security->xss_clean($this->input->post('txtpassword'));
            $result = $this->user_model->m_login($username, $password);
            if ($result) {
                foreach($result as $row) {
                    $session = array (
                    'user_id' => $row->account_id,
                    'user' => $row->username,
                    );
                    $this->session->set_userdata('session', $session);
                    redirect('dashboard');
                }
            }
            else {
                // $this->session->flashdata('user_registered');
                // redirect('user');
                echo "wrong password";
            }
        }
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
    public function logout() {
        $this->session->sess_destroy();
        redirect('user');
    }

}