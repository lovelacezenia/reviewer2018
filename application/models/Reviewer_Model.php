<?php
class Reviewer_Model extends CI_Model
{
    public function getClasscode(){
        return $this->db->get('classcode' )->result_array();
    }
}