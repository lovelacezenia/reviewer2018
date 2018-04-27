<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">View Score</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-pagination="true" data-search="true"
                                       data-toggle="table"
                                       data-url="Reviewer/getScores">
                                        <thead>
                                            <tr>
                                                <th data-sortable="true" data-field="timestamp">Timestamp</th>
                                                <th data-sortable="true" data-field="idno">ID Number</th>
                                                <th data-sortable="true" data-field="name">Firstname</th>
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