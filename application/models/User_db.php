<?php

class User_db extends CI_Model
{
// Read data using username and password
    public function login($data)
    {

        $this->db->select('*,CONCAT(firstname," ",lastname) AS name')
            ->where('idno like binary', $data['idno'])
            ->where('status', 'active')
            ->limit(1);
        $uname = $this->db->get('user')->row();

        $password = $data['password'];
        if ($uname == true) {
            if (password_verify($password, $uname->password)) {
                return true;
            }
        }
            return false;
    }

    //forsignup
    public function signup()
    {
        $password = $this->input->post('password');
        $options = ['cost' => 12];
        $hashpassword =  password_hash($password, PASSWORD_DEFAULT, $options);

        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'idno' => $this->input->post('idno'),
            'password' => $hashpassword,
            'contact_no' => $this->input->post('contact_no'),
            'class_id' => $this->input->post('classcode'),
            'position' => $this->input->post('position')
        );
        $this->db->insert('user',$data);
    }
    
}