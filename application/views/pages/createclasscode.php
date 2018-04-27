            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="Reviewer/createclasscode" method="POST">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Classcode</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="classcode" name="classcode" placeholder="Enter classcode">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Course no.</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="course_no" min="0" name="course_no" placeholder="Enter course no">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Description Title</label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="description" name="description" placeholder="Insert Description title"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Units</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="units" name="units" placeholder="Enter units">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Time and days</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="time_and_days" name="time_and_days" placeholder="Enter time and days..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Room</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="room" name="room" placeholder="Enter room">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button class="btn btn-primary"><a href="classcode">Back</a></button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
