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
                                <h4 class="card-title">Enrolled Students</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-pagination="true" data-search="true"
                                       data-toggle="table"
                                       data-url="Reviewer/recentenrolled">
                                        <thead>
                                            <tr>
                                                <th data-sortable="true" data-field="idno">ID Number</th>
                                                <th data-sortable="true" data-field="name">Name</th>
                                                <th data-sortable="true" data-field="classcode">Classcode</th>
                                                <th data-sortable="true" data-field="date">Date Enrolled</th>
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