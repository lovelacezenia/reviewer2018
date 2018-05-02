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
        return $this->db->select('concat(firstname, " ", lastname) as name, position, idno')
                    ->join('user', 'user.user_id = classcode.class_id')
                    ->get('classcode')
                    ->result_array();
    }
    
    //for create classcode
    public function createclasscode(){
        $data = array(
            'classcode' => $this->input->post('classcode'),
            'course_no' => $this->input->post('course_no'),
            'description' => $this->input->post('description'),
            'units' => $this->input->post('units'),
            'time_and_days' => $this->input->post('time_and_days'),
            'room'=> $this->input->post('room')
            );
        $this->db->insert('classcode',$data);
    }

    public function editprofile(){
        return $this->db->select('concat(firstname, " ", lastname) as name, idno, email, password')
                    ->get('user')
                    ->result_array();
    }
}