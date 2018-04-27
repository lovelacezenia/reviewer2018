<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Reviewer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        // Load database
        $this->load->model('Reviewer_Model', 'rm');

    }
    public function getClasscode(){
        echo json_encode($this->rm->getClasscode());
    }

    public function getViewclasscode(){
        echo json_encode($this->rm->getViewclasscode());
    }
    public function getScores(){
        echo json_encode($this->rm->getScores());
    }

    public function getEnrolledstudent(){
        echo json_encode($this->rm->getEnrolledstudent());
    }

}
