<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        // Load database
        $this->load->model('User_db','user_db');

    }

    // Check for user login process

    public function user_login_process()
    {

                $this->load->view('templates/header');
           
            $data = array(
                'idno' => $this->input->post('idno'),
                'password' => $this->input->post('password')
            );
            $result = $this->user_db->login($data);
            if ($result == TRUE) {
                $idno = $this->input->post('idno');
                if ($result != false) {
                    
                    $session_data = array(
                        'idno' => $result->idno,
                        'position' => $result->position,
                        'password' => $result->password,
                    );

// Add user data in session
                    $user_data = array(
                        'name' => $result->name,
                        'email' => $result->email,
                        'contact_no' => $result->contact_no,);
                    $this->session->set_userdata('user_in', $user_data);
                    $this->session->set_userdata('logged_in', $session_data);
                    if ($result->position === 'Admin') {
                        redirect(base_url() . 'adminhome');
                    } else {
                        redirect(base_url() . 'home');
                    }
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('pages/login', $data);
            }
        }

// Logout from admin page
    public function logout()
    {
// Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->session->sess_destroy();
        $data['message_display'] = 'Successfully Logout';
        redirect('login');
    }
}