<?php
class Pages extends CI_Controller {
	public function view($page = 'home'){
			if($page == 'login'){
				$this->load->view('pages/login');
			}
			$this->load->view('templates/header');
			$this->load->view('pages/' .$page);
			$this->load->view('templates/footer');
	}
}
?>