@extends('layouts.layout')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                         Widget settings form goes here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn blue">Save changes</button>
                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE HEADER-->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Profile Page</a>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
        	<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="tabbable-line boxless tabbable-reversed">
					<div class="tab-content">
						<div class="tab-pane active" id="tab_0">
							<div class="portlet box green">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>Edit Your Profile Page
									</div>
								</div>
								<div class="portlet-body form">
									<!-- BEGIN FORM-->
									<form action="{{ url('/update_profile') }}" class="form-horizontal" method="POST">
										{{ csrf_field() }}
										<div class="form-body">
											<div class="form-group">
												<label class="col-md-3 control-label">Name</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->name }}" name="fname" id="fname">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Last Name</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->last_name }}" name="last_name" id="last_name">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Address</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->address }}" name="address" id="address">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Postal Code</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->postal_code }}" name="postal_code" id="postal_code">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">City</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->city }}" name="city" id="city">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Country</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->country }}" name="country" id="country">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Tel</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->tel }}" name="tel" id="tel">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Whatsapp</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->whatsapp }}" name="whatsapp" id="whatsapp">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Email Address</label>
												<div class="col-md-4">
													<div class="input-group">
														<span class="input-group-addon input-circle-left">
														<i class="fa fa-envelope"></i>
														</span>
														<input type="email" class="form-control input-circle-right" value="{{ Auth::user()->email }}" name="email" id="email">
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Company Name</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->company_name }}" name="company_name" id="company_name">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Company Register Nr</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->company_register_nr }}" name="company_register_nr" id="company_register_nr">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Tax Nr</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->tax_nr }}" name="tax_nr" id="tax_nr">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Bank Account nr</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->bank_account_nr }}" name="bank_account_nr" id="bank_account_nr">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Bank Account Reciever Name</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-circle" value="{{ Auth::user()->bank_account_receiver_name }}" name="bank_account_receiver_name" id="bank_account_receiver_name">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Password</label>
												<div class="col-md-4">
													<div class="input-group">
														<input type="password" class="form-control input-circle-left" placeholder="password" name="password" id="password">
														<span class="input-group-addon input-circle-right">
														<i class="fa fa-user"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Confirm Password</label>
												<div class="col-md-4">
													<div class="input-group">
														<input type="password" class="form-control input-circle-left" placeholder="confirm password">
														<span class="input-group-addon input-circle-right">
														<i class="fa fa-user"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" class="btn btn-circle blue">Submit</button>
													<button type="button" class="btn btn-circle default">Cancel</button>
												</div>
											</div>
										</div>
									</form>
									<!-- END FORM-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

@endsection