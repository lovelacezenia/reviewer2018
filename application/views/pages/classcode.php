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
                                <h4 class="card-title">Classcode</h4>
                                <button type="button" class="btn btn-primary"> <a href="createclasscode"> Create Classcode </a></button>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-pagination="true" data-search="true"
                                       data-toggle="table"
                                       data-url="Reviewer/getViewclasscode">
                                        <thead>
                                            <tr>
                                                <th data-sortable="true" data-field="timestamp">Timestamp</th>
                                                <th data-sortable="true" data-field="classcode">Classcode</th>
                                                <th data-sortable="true" data-field="course_no">Course no.</th>
                                                <th data-sortable="true" data-field="description">Description Title</th>
                                                <th data-sortable="true" data-field="units">Units</th>
                                                <th data-sortable="true" data-field="time_and_days">Time and Days</th>
                                                <th data-sortable="true" data-field="room">Room</th>
                                            </tr>
                                        </thead>
                                        </tbody>
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