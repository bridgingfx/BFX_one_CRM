@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-9 col-xxl-8 col-sm-12">
					<div class="row">
						<div class="col-xl-12">
							<div class="card dz-card" id="custom-tab">
								<div class="card-header border-0">
									<div class="d-flex flex-wrap"></div>
									<nav>
										<div class="nav nav-pills light" id="nav-tab-p2p" role="tablist">
											<button type="button" class="btn btn-primary btn-sm" style="margin-right:10px" onclick="window.location='{{route('funds.funddeposit') }}'" ><i class="fa fa-plus me-2"></i> Deposit</button>
											<button type="button" class="btn btn-success btn-sm" style="margin-right:10px" onclick="window.location='{{route('funds.fundwithdrawal') }}'" ><i class="fa fa-plus me-2"></i> Withdrawal</button>
											<button type="button" class="btn btn-warning btn-sm" style="margin-right:10px" onclick="window.location='{{route('funds.fundtransfer') }}'" ><i class="fa fa-plus me-2"></i> Transfer</button>
										</div>
									</nav>
								</div>
								<div class="tab-content" id="myTabContent1">
									<div class="tab-pane fade show active" id="DefaultTab1" role="tabpanel" aria-labelledby="home-tab1">
										<div class="card-body pt-0">
											<!-- Nav tabs -->
											<div class="custom-tab-1">
												<ul class="nav nav-tabs">
													<li class="nav-item">
														<a class="nav-link active" data-bs-toggle="tab" href="#online-payment"><i class="la la-home me-2"></i> Online Payment</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#offline-payment"><i class="la la-user me-2"></i> Offline Payment</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#coins"><i class="la la-phone me-2"></i>  Coins</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#stable-coins"><i class="la la-envelope me-2"></i> Stable Coins</a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane fade show active" id="online-payment" role="tabpanel">
														<div class="row mt-5">
															<div class="col-md-3 col-sm-12 mb-2">
																<div class="card pull-up step-card p-3 text-center" data-value="Standard">
																	<div class="">
																		<span class="me-3 bgl-primary text-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone w-24 h-24 transition-all duration-500 text-gray-600 group-hover:text-blue-600" aria-hidden="true"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>
																		</span>
																	</div>
																	
																	<h5>Standard</h5>
																	<p>No commission, fixed spreads</p>
																	<ul class="list-icons">
																		<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span> No commission trading</a></li>
																		<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span>Fixed spreads</a></li>
																		<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span>24/7 support</a></li>
																		<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span>Educational resources</a></li>
																	</ul>
																</div>
															</div>
															
															<div class="col-md-3 col-sm-12 mb-2">
																<div class="card pull-up step-card p-3 text-center" data-value="Standard">
																	<div class="">
																		<span class="me-3 bgl-primary text-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone w-24 h-24 transition-all duration-500 text-gray-600 group-hover:text-blue-600" aria-hidden="true"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>
																		</span>
																	</div>
																	<h5>Standard</h5>
																	<p>No commission, fixed spreads</p>
																	<ul class="list-icons">
																		<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span> Lorem ipsum dolor sit amet</a></li>
																		<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span>Consectetur adipiscing elit</a></li>
																		<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span>Integer molestie lorem at massa</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<hr />
														<div class="row mt-5">
															<div class="basic-form">
																<form>
																	<div class="row">
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Enter Amount</label>
																			<input type="text" class="form-control" placeholder="Jhon">
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Select Currency</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option selected>INR</option>
																				<option>USD</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Select Account</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option selected>Wallet</option>
																				<option>MT5 Accounts</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">List Of MT5 Account</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option>1234567891</option>
																				<option>1234567895</option>
																			</select>
																		</div>
																		<div class="mb-4 position-relative  col-md-4">
																			<label class="form-label">Account Password</label>
																			<input type="password" id="dlab-password" class="form-control" value="123456">
																			<span class="show-pass eye style-1">
																				<i class="fa fa-eye-slash"></i>
																				<i class="fa fa-eye"></i>
																			</span>
																		</div>
																		<div class="mb-3 col-md-12">
																			<label class="form-label">&nbsp;</label>
																			<div class="form-check custom-checkbox mb-0">
																				<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
																				<label class="form-check-label" for="customCheckBox1">Terms and Conditions?</label>
																			</div>
																		</div>
																	</div>
																	<hr />
																	<button type="submit" class="btn btn-primary">Deposit Now</button>
																</form>
															</div>
														</div>
													</div>
													
													<div class="tab-pane fade" id="offline-payment">
														<div class="row mt-5">
															<div class="col-md-4 col-sm-12 mb-2">
																<div class="card pull-up step-card p-3 text-center" data-value="Standard">
																	<div class="">
																		<span class="me-3 bgl-primary text-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone w-24 h-24 transition-all duration-500 text-gray-600 group-hover:text-blue-600" aria-hidden="true"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>
																		</span>
																	</div>
																	
																	<h5>Bank Transfer</h5>
																	<p>No commission, fixed spreads</p>
																	<div class="info-list">
																		<ul class="list-group list-group-flush">
																			<li class="list-group-item d-flex px-0 justify-content-between">
																				<strong>Bank Name</strong>
																				<span class="mb-0 badge badge-danger">SBI</span>
																			</li>
																			<li class="list-group-item d-flex px-0 justify-content-between">
																				<strong>Account Holder</strong>
																				<span class="mb-0">Profx Media</span>
																			</li>
																			<li class="list-group-item d-flex px-0 justify-content-between">
																				<strong>Account Number</strong>
																				<span class="mb-0">1234567890</span>
																			</li>
																			<li class="list-group-item d-flex px-0 justify-content-between">
																				<strong>IFSC Code</strong>
																				<span class="mb-0">SBI00004567</span>
																			</li>
																			<li class="list-group-item d-flex px-0 justify-content-between">
																				<strong>Branch</strong>
																				<span class="mb-0">Dubai</span>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															
															
														</div>
														<hr />
														<div class="row mt-5">
															<div class="basic-form">
																<form>
																	<div class="row">
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Enter Amount</label>
																			<input type="text" class="form-control" placeholder="Jhon">
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Select Currency</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option selected>INR</option>
																				<option>USD</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Select Account</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option selected>Wallet</option>
																				<option>MT5 Accounts</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">List Of MT5 Account</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option>1234567891</option>
																				<option>1234567895</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label for="formFile" class="form-label">Upload Proof</label>
																			<input class="form-control" type="file" id="formFile">
																		</div>
																		<div class="mb-4 position-relative col-md-4">
																			<label class="form-label">Account Password</label>
																			<input type="password" id="dlab-password" class="form-control" value="123456">
																			<span class="show-pass eye style-1">
																				<i class="fa fa-eye-slash"></i>
																				<i class="fa fa-eye"></i>
																			</span>
																		</div>
																		<div class="mb-3 col-md-12">
																			<label class="form-label">&nbsp;</label>
																			<div class="form-check custom-checkbox mb-0">
																				<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
																				<label class="form-check-label" for="customCheckBox1">Terms and Conditions?</label>
																			</div>
																		</div>
																	</div>
																	<hr />
																	<button type="submit" class="btn btn-primary">Deposit Now</button>
																</form>
															</div>
														</div>
													</div>
													
													<div class="tab-pane fade" id="coins">
														<div class="row mt-5">
															<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
																<div class="card pull-up">
																	<div class="card-body align-items-center flex-wrap">
																		<div class="d-flex align-items-center mb-4">
																			<a href="javascript:void(0)" class="ico-icon">
																				<img src="assets/images/svg/btc1.svg" alt="">
																			</a>
																			<div class="ms-3">
																				<a href="javascript:void(0)"><h4 class="card-title mb-0">Bitcoin</h4></a>
																				<span>Finance</span>
																			</div>
																		</div>	
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<p class="mb-0 fs-14 text-dark font-w600">$72/90</P>
																				<span class="fs-12">Neutral</span>
																			</div>
																			<div>
																				<p class="mb-0 fs-14 text-success font-w600">50%</P>
																				<span class="fs-12">Ended 12 Oct</span>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
															
															<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
																<div class="card pull-up">
																	<div class="card-body align-items-center flex-wrap">
																		<div class="d-flex align-items-center mb-4">
																			<a href="javascript:void(0)" class="ico-icon">
																				<img src="assets/images/svg/btc1.svg" alt="">
																			</a>
																			<div class="ms-3">
																				<a href="javascript:void(0)"><h4 class="card-title mb-0">Bitcoin</h4></a>
																				<span>Finance</span>
																			</div>
																		</div>	
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<p class="mb-0 fs-14 text-dark font-w600">$72/90</P>
																				<span class="fs-12">Neutral</span>
																			</div>
																			<div>
																				<p class="mb-0 fs-14 text-success font-w600">50%</P>
																				<span class="fs-12">Ended 12 Oct</span>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
															
															<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
																<div class="card pull-up">
																	<div class="card-body align-items-center flex-wrap">
																		<div class="d-flex align-items-center mb-4">
																			<a href="javascript:void(0)" class="ico-icon">
																				<img src="assets/images/svg/btc1.svg" alt="">
																			</a>
																			<div class="ms-3">
																				<a href="javascript:void(0)"><h4 class="card-title mb-0">Bitcoin</h4></a>
																				<span>Finance</span>
																			</div>
																		</div>	
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<p class="mb-0 fs-14 text-dark font-w600">$72/90</P>
																				<span class="fs-12">Neutral</span>
																			</div>
																			<div>
																				<p class="mb-0 fs-14 text-success font-w600">50%</P>
																				<span class="fs-12">Ended 12 Oct</span>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
															
															<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
																<div class="card pull-up">
																	<div class="card-body align-items-center flex-wrap">
																		<div class="d-flex align-items-center mb-4">
																			<a href="javascript:void(0)" class="ico-icon">
																				<img src="assets/images/svg/btc1.svg" alt="">
																			</a>
																			<div class="ms-3">
																				<a href="javascript:void(0)"><h4 class="card-title mb-0">Bitcoin</h4></a>
																				<span>Finance</span>
																			</div>
																		</div>	
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<p class="mb-0 fs-14 text-dark font-w600">$72/90</P>
																				<span class="fs-12">Neutral</span>
																			</div>
																			<div>
																				<p class="mb-0 fs-14 text-success font-w600">50%</P>
																				<span class="fs-12">Ended 12 Oct</span>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
															
															
														</div>
														<hr />
														<div class="row mt-5">
															<div class="basic-form">
																<form>
																	<div class="row">
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Enter Amount</label>
																			<input type="text" class="form-control" placeholder="Jhon">
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Select Currency</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option selected>INR</option>
																				<option>USD</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Select Account</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option selected>Wallet</option>
																				<option>MT5 Accounts</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">List Of MT5 Account</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option>1234567891</option>
																				<option>1234567895</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label for="formFile" class="form-label">Upload Proof</label>
																			<input class="form-control" type="file" id="formFile">
																		</div>
																		<div class="mb-4 position-relative col-md-4">
																			<label class="form-label">Account Password</label>
																			<input type="password" id="dlab-password" class="form-control" value="123456">
																			<span class="show-pass eye style-1">
																				<i class="fa fa-eye-slash"></i>
																				<i class="fa fa-eye"></i>
																			</span>
																		</div>
																		<div class="mb-3 col-md-12">
																			<label class="form-label">&nbsp;</label>
																			<div class="form-check custom-checkbox mb-0">
																				<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
																				<label class="form-check-label" for="customCheckBox1">Terms and Conditions?</label>
																			</div>
																		</div>
																	</div>
																	<hr />
																	<button type="submit" class="btn btn-primary">Deposit Now</button>
																</form>
															</div>
														</div>
													</div>
													
													<div class="tab-pane fade" id="stable-coins">
														<div class="row mt-5">
															<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
																<div class="card pull-up">
																	<div class="card-body align-items-center flex-wrap">
																		<div class="d-flex align-items-center mb-4">
																			<a href="javascript:void(0)" class="ico-icon">
																				<img src="assets/images/svg/btc1.svg" alt="">
																			</a>
																			<div class="ms-3">
																				<a href="javascript:void(0)"><h4 class="card-title mb-0">Bitcoin</h4></a>
																				<span>Finance</span>
																			</div>
																		</div>	
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<p class="mb-0 fs-14 text-dark font-w600">$72/90</P>
																				<span class="fs-12">Neutral</span>
																			</div>
																			<div>
																				<p class="mb-0 fs-14 text-success font-w600">50%</P>
																				<span class="fs-12">Ended 12 Oct</span>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
															
															<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
																<div class="card pull-up">
																	<div class="card-body align-items-center flex-wrap">
																		<div class="d-flex align-items-center mb-4">
																			<a href="javascript:void(0)" class="ico-icon">
																				<img src="assets/images/svg/btc1.svg" alt="">
																			</a>
																			<div class="ms-3">
																				<a href="javascript:void(0)"><h4 class="card-title mb-0">Bitcoin</h4></a>
																				<span>Finance</span>
																			</div>
																		</div>	
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<p class="mb-0 fs-14 text-dark font-w600">$72/90</P>
																				<span class="fs-12">Neutral</span>
																			</div>
																			<div>
																				<p class="mb-0 fs-14 text-success font-w600">50%</P>
																				<span class="fs-12">Ended 12 Oct</span>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
															
															<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
																<div class="card pull-up">
																	<div class="card-body align-items-center flex-wrap">
																		<div class="d-flex align-items-center mb-4">
																			<a href="javascript:void(0)" class="ico-icon">
																				<img src="assets/images/svg/btc1.svg" alt="">
																			</a>
																			<div class="ms-3">
																				<a href="javascript:void(0)"><h4 class="card-title mb-0">Bitcoin</h4></a>
																				<span>Finance</span>
																			</div>
																		</div>	
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<p class="mb-0 fs-14 text-dark font-w600">$72/90</P>
																				<span class="fs-12">Neutral</span>
																			</div>
																			<div>
																				<p class="mb-0 fs-14 text-success font-w600">50%</P>
																				<span class="fs-12">Ended 12 Oct</span>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
															
															<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
																<div class="card pull-up">
																	<div class="card-body align-items-center flex-wrap">
																		<div class="d-flex align-items-center mb-4">
																			<a href="javascript:void(0)" class="ico-icon">
																				<img src="assets/images/svg/btc1.svg" alt="">
																			</a>
																			<div class="ms-3">
																				<a href="javascript:void(0)"><h4 class="card-title mb-0">Bitcoin</h4></a>
																				<span>Finance</span>
																			</div>
																		</div>	
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<p class="mb-0 fs-14 text-dark font-w600">$72/90</P>
																				<span class="fs-12">Neutral</span>
																			</div>
																			<div>
																				<p class="mb-0 fs-14 text-success font-w600">50%</P>
																				<span class="fs-12">Ended 12 Oct</span>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
															
															
														</div>
														<hr />
														<div class="row mt-5">
															<div class="basic-form">
																<form>
																	<div class="row">
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Enter Amount</label>
																			<input type="text" class="form-control" placeholder="Jhon">
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Select Currency</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option selected>INR</option>
																				<option>USD</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">Select Account</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option selected>Wallet</option>
																				<option>MT5 Accounts</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label class="form-label">List Of MT5 Account</label>
																			<select id="inputState" class="default-select form-control wide">
																				<option>1234567891</option>
																				<option>1234567895</option>
																			</select>
																		</div>
																		<div class="mb-3 col-md-4">
																			<label for="formFile" class="form-label">Upload Proof</label>
																			<input class="form-control" type="file" id="formFile">
																		</div>
																		<div class="mb-4 position-relative col-md-4">
																			<label class="form-label">Account Password</label>
																			<input type="password" id="dlab-password" class="form-control" value="123456">
																			<span class="show-pass eye style-1">
																				<i class="fa fa-eye-slash"></i>
																				<i class="fa fa-eye"></i>
																			</span>
																		</div>
																		<div class="mb-3 col-md-12">
																			<label class="form-label">&nbsp;</label>
																			<div class="form-check custom-checkbox mb-0">
																				<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
																				<label class="form-check-label" for="customCheckBox1">Terms and Conditions?</label>
																			</div>
																		</div>
																	</div>
																	<hr />
																	<button type="submit" class="btn btn-primary">Deposit Now</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-xxl-4 col-sm-12">
					<div class="row">
						<!-- column-->
						<div class="col-xl-12">
							<div class="card card-box bg-danger pull-up">
								<div class="card-header border-0 pb-0 mb-3">
									<div class="chart-num">
										<p>My Wallet</p>
										<h2 class="font-w600 mb-0">$65,123</h2>
									</div>
									<svg width="50" height="45" viewBox="0 0 137 137" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M68.5 0C30.6686 0 0 30.6686 0 68.5C0 106.331 30.6686 137 68.5 137C106.331 137 137 106.331 137 68.5C136.958 30.6865 106.313 0.0418093 68.5 0ZM40.213 63.6068H59.7843C62.4869 63.6068 64.6774 65.7973 64.6774 68.5C64.6774 71.2027 62.4869 73.3932 59.7843 73.3932H40.213C37.5104 73.3932 35.3199 71.2027 35.3199 68.5C35.3199 65.7973 37.5119 63.6068 40.213 63.6068ZM101.393 56.6456L95.5088 86.0883C94.1231 92.9226 88.122 97.8411 81.1488 97.8576H40.213C37.5104 97.8576 35.3199 95.6671 35.3199 92.9644C35.3199 90.2617 37.5119 88.0712 40.213 88.0712H81.1488C83.4617 88.0652 85.4522 86.4347 85.9121 84.168L91.7982 54.7253C92.3208 52.0973 90.6156 49.544 87.9891 49.0214C87.677 48.9601 87.3605 48.9288 87.0439 48.9288H49.9994C47.2967 48.9288 45.1062 46.7383 45.1062 44.0356C45.1062 41.3329 47.2967 39.1424 49.9994 39.1424H87.0439C95.128 39.1454 101.679 45.699 101.677 53.7831C101.677 54.7433 101.582 55.7019 101.393 56.6456Z"
											fill="#FFF" />
									</svg>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-sm-6">
							<div class="card pull-up">
								<div class="card-header border-0 pb-0">
									<h6 class="mb-0 m-auto">Deposit</h6>
								</div>
								<div class="card-body text-center pt-3">
									<div class="icon-box icon-box-sm bg-primary">
										<svg width="32" height="32" viewBox="0 0 32 32" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M9 30H23C24.3261 30 25.5979 29.4732 26.5355 28.5355C27.4732 27.5979 28 26.3261 28 25V19C28 17.6739 27.4732 16.4021 26.5355 15.4645C25.5979 14.5268 24.3261 14 23 14H9C7.67392 14 6.40215 14.5268 5.46447 15.4645C4.52678 16.4021 4 17.6739 4 19V25C4 26.3261 4.52678 27.5979 5.46447 28.5355C6.40215 29.4732 7.67392 30 9 30ZM6 19C6 18.2044 6.31607 17.4413 6.87868 16.8787C7.44129 16.3161 8.20435 16 9 16H23C23.7956 16 24.5587 16.3161 25.1213 16.8787C25.6839 17.4413 26 18.2044 26 19V25C26 25.7956 25.6839 26.5587 25.1213 27.1213C24.5587 27.6839 23.7956 28 23 28H9C8.20435 28 7.44129 27.6839 6.87868 27.1213C6.31607 26.5587 6 25.7956 6 25V19Z"
												fill="white"></path>
											<path
												d="M16 26C16.7912 26 17.5645 25.7654 18.2223 25.3259C18.8801 24.8864 19.3928 24.2616 19.6955 23.5307C19.9983 22.7998 20.0775 21.9956 19.9232 21.2196C19.7688 20.4437 19.3879 19.731 18.8285 19.1716C18.269 18.6122 17.5563 18.2312 16.7804 18.0769C16.0045 17.9225 15.2002 18.0017 14.4693 18.3045C13.7384 18.6072 13.1137 19.1199 12.6741 19.7777C12.2346 20.4355 12 21.2089 12 22C12 23.0609 12.4215 24.0783 13.1716 24.8284C13.9217 25.5786 14.9392 26 16 26ZM16 20C16.3956 20 16.7823 20.1173 17.1112 20.3371C17.4401 20.5568 17.6964 20.8692 17.8478 21.2346C17.9992 21.6001 18.0388 22.0022 17.9616 22.3902C17.8844 22.7781 17.6939 23.1345 17.4142 23.4142C17.1345 23.6939 16.7782 23.8844 16.3902 23.9616C16.0022 24.0387 15.6001 23.9991 15.2347 23.8478C14.8692 23.6964 14.5569 23.44 14.3371 23.1111C14.1173 22.7822 14 22.3956 14 22C14 21.4696 14.2107 20.9609 14.5858 20.5858C14.9609 20.2107 15.4696 20 16 20ZM16 2C15.7348 2 15.4805 2.10536 15.2929 2.29289C15.1054 2.48043 15 2.73478 15 3V8.59L12.46 6.05C12.2687 5.88617 12.0227 5.80057 11.771 5.81029C11.5193 5.82001 11.2806 5.92434 11.1025 6.10244C10.9244 6.28053 10.82 6.51927 10.8103 6.77095C10.8006 7.02262 10.8862 7.2687 11.05 7.46L15.29 11.71C15.3822 11.8 15.4908 11.8713 15.61 11.92C15.7334 11.9723 15.866 11.9992 16 11.9992C16.134 11.9992 16.2666 11.9723 16.39 11.92C16.5092 11.8713 16.6179 11.8 16.71 11.71L21 7.46C21.1639 7.2687 21.2495 7.02262 21.2397 6.77095C21.23 6.51927 21.1257 6.28053 20.9476 6.10244C20.7695 5.92434 20.5308 5.82001 20.2791 5.81029C20.0274 5.80057 19.7813 5.88617 19.59 6.05L17 8.59V3C17 2.73478 16.8947 2.48043 16.7071 2.29289C16.5196 2.10536 16.2652 2 16 2Z"
												fill="white"></path>
										</svg>
									</div>
									<div class="count-num text-dark mt-1">$26,741.60</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-sm-6">
							<div class="card pull-up">
								<div class="card-header border-0 pb-0">
									<h6 class="m-auto mb-0">Withdrawal</h6>
								</div>
								<div class="card-body text-center pt-3">
									<div class="icon-box icon-box-sm bg-danger">
										<svg width="32" height="32" viewBox="0 0 32 32" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M4 19V25C4 26.3261 4.52678 27.5979 5.46447 28.5355C6.40215 29.4732 7.67392 30 9 30H23C24.3261 30 25.5979 29.4732 26.5355 28.5355C27.4732 27.5979 28 26.3261 28 25V19C28 17.6739 27.4732 16.4021 26.5355 15.4645C25.5979 14.5268 24.3261 14 23 14H9C7.67392 14 6.40215 14.5268 5.46447 15.4645C4.52678 16.4021 4 17.6739 4 19ZM26 19V25C26 25.7956 25.6839 26.5587 25.1213 27.1213C24.5587 27.6839 23.7956 28 23 28H9C8.20435 28 7.44129 27.6839 6.87868 27.1213C6.31607 26.5587 6 25.7956 6 25V19C6 18.2044 6.31607 17.4413 6.87868 16.8787C7.44129 16.3161 8.20435 16 9 16H23C23.7956 16 24.5587 16.3161 25.1213 16.8787C25.6839 17.4413 26 18.2044 26 19Z"
												fill="white"></path>
											<path
												d="M16.0001 25.9999C16.7912 25.9999 17.5646 25.7653 18.2224 25.3258C18.8802 24.8863 19.3929 24.2616 19.6956 23.5307C19.9984 22.7998 20.0776 21.9955 19.9232 21.2196C19.7689 20.4437 19.3879 19.7309 18.8285 19.1715C18.2691 18.6121 17.5564 18.2311 16.7804 18.0768C16.0045 17.9225 15.2003 18.0017 14.4694 18.3044C13.7384 18.6072 13.1137 19.1199 12.6742 19.7777C12.2347 20.4355 12.0001 21.2088 12.0001 21.9999C12.0001 23.0608 12.4215 24.0782 13.1717 24.8284C13.9218 25.5785 14.9392 25.9999 16.0001 25.9999ZM16.0001 19.9999C16.3956 19.9999 16.7823 20.1172 17.1112 20.337C17.4401 20.5568 17.6965 20.8691 17.8478 21.2346C17.9992 21.6 18.0388 22.0022 17.9617 22.3901C17.8845 22.7781 17.694 23.1344 17.4143 23.4142C17.1346 23.6939 16.7782 23.8843 16.3903 23.9615C16.0023 24.0387 15.6002 23.9991 15.2347 23.8477C14.8693 23.6963 14.5569 23.44 14.3371 23.1111C14.1174 22.7822 14.0001 22.3955 14.0001 21.9999C14.0001 21.4695 14.2108 20.9608 14.5859 20.5857C14.9609 20.2107 15.4697 19.9999 16.0001 19.9999ZM16.7101 2.28994C16.6171 2.19621 16.5065 2.12182 16.3847 2.07105C16.2628 2.02028 16.1321 1.99414 16.0001 1.99414C15.8681 1.99414 15.7374 2.02028 15.6155 2.07105C15.4937 2.12182 15.383 2.19621 15.2901 2.28994L11.0501 6.53994C10.8565 6.72692 10.7451 6.98315 10.7404 7.25226C10.7357 7.52138 10.8381 7.78133 11.0251 7.97494C11.2121 8.16855 11.4683 8.27995 11.7374 8.28464C12.0065 8.28933 12.2665 8.18692 12.4601 7.99994L15.0001 5.40994V10.9999C15.0001 11.2652 15.1054 11.5195 15.293 11.707C15.4805 11.8946 15.7349 11.9999 16.0001 11.9999C16.2653 11.9999 16.5197 11.8946 16.7072 11.707C16.8947 11.5195 17.0001 11.2652 17.0001 10.9999V5.40994L19.5401 7.99994C19.7263 8.18468 19.9777 8.28883 20.2401 8.28994C20.38 8.29755 20.52 8.27567 20.6509 8.22571C20.7818 8.17575 20.9008 8.09883 21.0001 7.99994C21.1863 7.81258 21.2909 7.55912 21.2909 7.29494C21.2909 7.03075 21.1863 6.7773 21.0001 6.58994L16.7101 2.28994Z"
												fill="white"></path>
										</svg>
									</div>
									<div class="count-num text-dark mt-1">- $23,741.60</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection