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
                                            <span class="hidden-xs-down">Section </span>
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
                                    <div id="tab1" role="sec">
                                        <div class="p-20">
                                        <div class="col-lg-7">

                                            <h4 class="card-title">type of quiz </h4>
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
                                    <div class="tab-pane  p-20" id="sec1" role="sec">  </div>
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