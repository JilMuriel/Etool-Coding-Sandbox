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
                    'privilege' => $row->account_privilege
                    );
                    $this->session->set_userdata('session', $session);

                    if ($session['privilege'] == "admin") {
                        $this->session->set_userdata('session', $session);
                        redirect('dashboard/admin_dashboard');
                    }
                    else if ($session['privilege'] == "instructor") {
                        $this->session->set_userdata('session', $session);
                        redirect('dashboard/instructor_dashboard');
                    }
                    else if ($session['privilege'] == "student") {
                        $this->session->set_userdata('session', $session);
                        redirect('dashboard');
                    }

                }
            }
            else {
<<<<<<< HEAD
                // $this->session->flashdata('user_registered');
                // redirect('user');
                echo "<script>alert('No Account Existing')</script>";
=======
                redirect('user');
                echo "wrong password";
>>>>>>> c106dfe82a5a5ccdf6c6a9e8d0d41cd4c7578017
            }
        }
    }
    public function validate_user() {
        $data['title'] = 'Validate ID';
        $this->load->view('templates/header', $data);
        $this->load->view('enter_id_view');
        $this->load->view('templates/footer');
        $this->form_validation->set_rules('txtuserid', 'User ID','trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('enter_id_view');
            $this->load->view('templates/footer');
        } else {
            $account_id = $this->security->xss_clean($this->input->post('txtuserid'));
            $this->session->set_userdata('txtuserid', $account_id);
            $result = $this->user_model->id_verify($account_id);
            if ($result) {
                foreach($result as $row) {
                    $session = array (
                    'user_id' => $row->account_id
                    );
                    redirect('user/create_account');
                }
            }
            else {
                // $this->session->flashdata('user_registered');
                echo "<script>alert('ID NOT FOUND')</script>";
            }
        }

    }
                // echo $id = $session['user_id'];
    public function create_account() {
        $data['title'] = 'Create account';
        $this->form_validation->set_rules('txtusername', 'Username', 'required');
        $this->form_validation->set_rules('txtpassword', 'Password', 'required');
        // $this->form_validation->set_rules('txtemail', 'Email', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('create_account_view');
            $this->load->view('templates/footer');
        }
        else {
            $data = array(
                'username' => $this->input->post('txtusername'),
                'password' => $this->input->post('txtpassword'),
                // 'email' => $this->input->post('txtemail')
                // 'fname' => $this->input->post('txtfname'),
                // 'lname' => $this->input->post('txtlname')
            );
            $id = $this->session->userdata('txtuserid');
            $this->user_model->m_register($id, $data);
            $this->session->sess_destroy();
            redirect('user');
        }
    }
    public function logout() {
        $this->session->sess_destroy();
        redirect('user');
    }

}