<?php

class User_db extends CI_Model
{
// Read data using username and password
    public function login($data)
    {

        $this->db->select('*,CONCAT(firstname," ",lastname) AS name')
            ->where('idno', $data['idno'])
            ->where('status', 'active')
            ->limit(1);
        $uname = $this->db->get('user')->row();

        $password = $data['password'];
        if ($uname == true) {

            if ($password == $uname->password) {
                return $uname;
            }
        }
        return false;
    }

    //forsignup
    public function signup()
    {
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'idno' => $this->input->post('idno'),
            'password' => $this->input->post('password'),
            'contact_no' => $this->input->post('contact_no'),
            'position' => $this->input->post('position')
        );
        $this->db->insert('user',$data);
    }
}