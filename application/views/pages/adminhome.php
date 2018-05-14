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

            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Recent Enrolled Student </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table" data-pagination="true"
                                       data-toggle="table"
                                       data-url="Reviewer/getScores">
                                        <thead>
                                            <tr>
                                                <th data-sortable="true" data-field="timestamp">Timestamp</th>
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
