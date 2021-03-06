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

    public function createclasscode(){
        $this->rm->createclasscode();
        redirect('classcode');
    }

    public function editprofile(){
        echo json_encode($this->rm->editprofile());

    }
    public function totalofstudent(){
       echo json_encode ($this->rm->totalofstudent());
    }

    public function subject(){
        echo json_encode($this->rm->subject());
    }
    //save password
    public function save(){
        $this->rm->save();
        redirect('profile');
    }
    //curent enrolled student
    public function recentenrolled(){
        echo json_encode($this->rm->recentenrolled());
    }

    public function sendQuizFile(){
        $myfile = fopen("quiz.html", "w");
        $txt = $this->input->post('content');
        fwrite($myfile, $txt);
        fclose($myfile);
    }
}
