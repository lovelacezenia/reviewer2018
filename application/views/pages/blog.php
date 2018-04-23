<?php
if(isset($this->session->userdata['logged_in'])){
    if($this->session->userdata['logged_in']['position'] === 'Admin'){
        header('location: adminhome');
    }else{
        header('location: home');
    }
}
?>