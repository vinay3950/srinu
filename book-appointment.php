
<?php

require('components/header.php');
?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Book Appointment</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<div class="card">
					<div class="header">
						<h2>Appointment Information <small>Description text here...</small> </h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>


					<form action='./appointment.php' method='POST'>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <lable>Date of Birth</lable>
                                        <input type="date" name="dob" class="datepicker form-control" placeholder="Date of Birth">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="gender">
                                        <option value="">-- Gender --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="service">
                                        <option value="">-- Service --</option>
                                        <option>Select Service</option>
                                        <option>Dental Checkup</option>
                                        <option>Full Body Checkup</option>
                                        <option>ENT Checkup</option>
                                        <option>Heart Checkup</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="datetime-local" name="date_time" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="phone_no" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" type="text" name="description" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                <button type="submit" class="btn btn-raised">Cancel</button>
                            </div>
                        </div>
                    </div>
                    </form>
				</div>
			</div>
		</div>
    </div>
</section>



