<?php

require('components/header.php');
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Payment</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Payment Information <small>Description text here...</small> </h2>
						<ul class="header-dropdown">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>

                    <form action='./payment.php' method='POST'>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="payment_no" class="form-control" placeholder="Payment Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="patient_name" class="form-control" placeholder="Patient Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="doctor_name" class="form-control" placeholder="Doctor Name">
                                    </div>
                                </div>
                            </div>                        
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" name="payment_date" class="datepicker form-control" placeholder="Payment Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="total_amount" class="form-control" placeholder="Total Amount">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="discount" class="form-control" placeholder="Discount">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="payment_method">
                                        <option value="">-- Payment Method --</option>
                                        <option>Cash</option>
                                        <option>Cheque</option>
                                        <option>Credit Card</option>
                                        <option>Debit Card</option>
                                        <option>Netbanking</option>
                                        <option>Insurance</option>
                                    </select>
                                </div>
                            </div>                            
                            <div class="col-sm-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick"name="payment_status">
                                        <option value="">-- Payment Status --</option>
                                        <option>Select Status</option>
                                        <option>Complete</option>
                                        <option>Pending</option>
                                        <option>Partial</option>
                                    </select>
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