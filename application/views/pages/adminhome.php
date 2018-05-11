<?php
if(!isset($this->session->userdata['logged_in'])){
    header('location: login');
}
?>
    <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 id="totalofstudent">
                                    </h2>
                                    <p class="m-b-0">Student List</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-book f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 id="subject"></h2>
                                    <p class="m-b-0">Subject List</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


                <!-- End PAge Content -->
            </div>