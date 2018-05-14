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
                                <h4 class="card-title">View Score</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-pagination="true" data-search="true"
                                       data-toggle="table"
                                       data-url="Reviewer/getScores">
                                        <thead>
                                            <tr>
                                                <th data-sortable="true" data-field="timestamp">Timestamp</th>
                                                <th data-sortable="true" data-field="idno">ID Number</th>
                                                <th data-sortable="true" data-field="name">Name</th>
                                                <th data-sortable="true" data-field="score">Score</th>
                                                <th data-sortable="true" data-field="total_score">Total Score</th>
                                                <th data-sortable="true" data-field="quiz_date">Date</th>
                                            </tr>
                                        </thead>
                                    </table>
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