<?php
class Reviewer_Model extends CI_Model
{
    public function getClasscode(){
        return $this->db->get('classcode' )->result_array();
    }

    public function getViewclasscode(){
    	return $this->db->get('classcode')->result_array();
    }
    public function getScores(){

    	return $this->db->select('concat(firstname, " " ,lastname) as name, scores.*, idno')
    				->join('user','user.user_id = score_id')
    				->get('scores')
                    ->result_array();
    }

    public function getEnrolledstudent(){
        return $this->db->select('concat(firstname, " ", lastname) as name, idno')
                    ->join('user', 'user.user_id = classcode.class_id')
                    ->get('classcode')
                    ->result_array();
    }
}