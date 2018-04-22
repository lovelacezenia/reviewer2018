<?php
class Pages extends CI_Controller {
	public function view($page = 'home'){
			if($page == 'login'){
				$this->load->view('pages/login');
			}
			if(isset($this->session->userdata['logged_in']['position'])){
				$position =  $this->session->userdata['logged_in']['position'];
				if ($position == 'Admin') {
					$this->load->view('templates/adminheader');
					$this->load->view('pages/' .$page);
					$this->load->view('templates/adminfooter');
				}else{
					$this->load->view('templates/header');
					$this->load->view('pages/' .$page);
					$this->load->view('templates/footer');
				}
			}
			
	}
}
?>