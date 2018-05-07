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
                                        <a class="nav-link" data-toggle="tab" href="#" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                            <span class="hidden-xs-down">Section 1</span>
                                        </a>
                                    </li>
                                </ul>
                                <button class="btn btn-primary hidden-xs-down" onclick="addrow();">+</button>
                        <!-- Tab panes -->
                             <div id="tab1" role="sec">
                                 <div class="p-20">
                                      <div class="col-lg-7">
                                           <h4 class="card-title">type of quiz </h4>
                                            <div class="row p-t-30" id="input">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select name="inputs" id="inputs" class="form-control">
                                                            <option value="1">Multiple Choices</option>
                                                            <option value="2">True or False</option>
                                                            <option value="3">Indentification</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input id="numberOfQuestions" type="text" class="tdl-new form-control" min="0" placeholder="Typeno">
                                                    </div>
                                                </div>

                                            <div class="col-md-0">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary" onclick="addbutton();">go</button>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                        </div>
                                 <div id="inputQuestions">

                                 </div>
                                    <div class="form-group row">
                                            <div class="col-lg-2 ml-auto">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
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