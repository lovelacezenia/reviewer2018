<?php
if(!isset($this->session->userdata['logged_in'])){
    header('location: login');
}
?>
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Quiz</h4>
                                <!-- Nav tabs -->
                                <ul id="tab" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                            <span class="hidden-xs-down">Quiz 1</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-user"></i></span>
                                        </a>
                                    </li>
                                </ul>
                                <button class="btn btn-success hidden-xs-down" onclick="addrow();">+</button>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <div class="p-20">
                                        <div class="col-lg-4">

                                            <h4 class="card-title">1. What is IIS?</h4>
                                            <div class="card-content">
                                                <div class="todo-list">
                                                    <div class="tdl-holder">
                                                        <div class="tdl-content">
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"><i class="bg-primary"></i><span>Build an angular app</span>
                                                                        <a href='#'></a>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"><i class="bg-success"></i><span>Creating component page</span>
                                                                        <a href='#'></a>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"><i class="bg-warning"></i><span>Follow back those who follow you</span>
                                                                        <a href='#'></a>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"><i class="bg-danger"></i><span>Design One page theme</span>
                                                                        <a href='#'></a>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <input type="text" class="tdl-new form-control" placeholder="Type here">
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane  p-20" id="profile" role="tabpanel">2</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->
    </div>