<?php
class User_db extends CI_Model {
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
}