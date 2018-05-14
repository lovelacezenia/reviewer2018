<?php
if(!isset($this->session->userdata['logged_in'])){
    header('location: login');
}
?>
<!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
                        <div class="card card-outline-primary">
                            <div class="card-body">
                                    <div class="form-body">
                                        <h3 class="card-title m-t-17">Person Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <i class="fa fa-user"></i>
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="firstname" id="firstname" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <i class="fa fa-user"></i>
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="lastname" id="lastname" class="form-control form-control-danger" disabled>
                                                 </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <i class="fa fa-address-card-o"></i>
                                                    <label class="control-label">ID Number</label>
                                                    <input type="text" name="idno" id="idno" min="0" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <i class="fa fa-envelope"></i>
                                                    <label class="control-label">Email</label>
                                                    <input type="text" name="email" id="email" class="form-control form-control-danger" disabled>
                                                 </div>
                                            </div>
                                            <form method="post" action="Reviewer/save" data-validate="parsley">
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <i class="fa fa-key"></i>
                                                    <label class="control-label">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control form-control-danger">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>