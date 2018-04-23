<?php

class Pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if($page === 'login'){
            $this->load->view('pages/login');
        }else{
            if(isset($this->session->userdata['logged_in'])){
                if($this->session->userdata['logged_in']['position'] === 'Admin'){
                    $this->load->view('templates/adminheader');
                    $this->load->view('pages/' . $page);
                    $this->load->view('templates/adminfooter');
                }else{
                    $this->load->view('templates/header');
                    $this->load->view('pages/' . $page);
                    $this->load->view('templates/footer');
                }
            }else{
                $this->load->view('templates/header');
                $this->load->view('pages/' . $page);
                $this->load->view('templates/footer');
            }

        }

    }
}
?>