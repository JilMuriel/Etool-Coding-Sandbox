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
                // $this->session->flashdata('user_registered');
                // redirect('user');
                echo "wrong password";
            }
        }
    }
    public function validate_user() {
        $data['title'] = 'Validate ID';
        $this->form_validation->set_rules('txtuserid', 'User ID','trim|required');
        $session = array (
                    'user_id' => $row->account_id
                    );
                    redirect('user/create_account');
                    // redirect('user/create_account');
                    $data['title'] = 'create account';
                    $data['id'] = $session['user_id'];
                    echo $data['id'];
                    echo $leId = $data['id'];
                    echo $this->$la_id = $leId;
                        $this->form_validation->set_rules('txtusername', 'Username', 'required');
                        $this->form_validation->set_rules('txtpassword', 'Password', 'required');
                        $this->form_validation->set_rules('txtemail', 'Email', 'required');
                        if ($this->form_validation->run() == False) {
                            $this->load->view('templates/header', $data);
                            $this->load->view('create_account_view');
                            $this->load->view('templates/footer');
                        }
                        else {
                            $data = array(
                                'username' => $this->input->post('txtusername'),
                                'password' => $this->input->post('txtpassword'),
                                'email' => $this->input->post('txtemail')
                                // 'fname' => $this->input->post('txtfname'),
                                // 'lname' => $this->input->post('txtlname')
                            );
                            $this->user_model->m_register($leId, $data);
                            // $this->session->sess_destroy();
                            redirect('user');
                        }

                }
                // echo $id = $session['user_id'];
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