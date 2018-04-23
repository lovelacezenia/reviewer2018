<?php
if(!isset($this->session->userdata['logged_in'])){
    header('location: login');
}
?>