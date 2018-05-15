<?php
if (!isset($this->session->userdata['logged_in'])) {
    header('location: login');
}
?>
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div id="quiz" class="card-body">
                    <h4 class="card-title">Quiz</h4>

                    <!-- Tab panes -->
                        <div class="p-20">
                            <div class="col-lg-7">
                                <div class="row p-t-30" id="input">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="sr-only">Classcode</label>
                                            <select name="classcode" id="classcode" class="form-control">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="inputs" id="inputs" class="form-control">
                                                <option value="1">Indentification</option>
                                                <option value="2">True or False</option>
                                                <option value="3">Multiple Choices</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input id="numberOfQuestions" type="text" class="tdl-new form-control"
                                                   min="0" placeholder="Typeno">
                                        </div>
                                    </div>

                                    <div class="col-md-0">
                                        <div class="form-group">
                                            <button class="btn btn-primary" onclick="addbutton();">go
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="inputQuestions">

                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 ml-auto">
                                <button type="submit" onclick="saveQuiz()" class="btn btn-primary">Save</button>
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