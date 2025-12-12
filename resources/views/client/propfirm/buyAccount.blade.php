@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 ">
					<div class="card">
						<div class="card-header border-0 d-block pb-0">
							<h2 class="card-title mb-3">10k Account Summary</h2>
							<div class="bootstrap-badge">
								<span class="badge light badge-danger">Price $50</span>
								<span class="badge light badge-success">Profit Targets 8%</span>
								<span class="badge light badge-secondary">Reward Points 10%</span>
							</div>
							<div class="row mt-1 mb-3">
								<div class="col-md-2 col-sm-6 border-end border-top border-start border-bottom">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">4</span> %</h4>
										<p class="m-0">Max Daily Loss</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-6 border-bottom border-top border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">8</span> %</h4>
										<p class="m-0">Max Overall Loss</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-6 border-bottom border-top border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">3</span></h4>
										<p class="m-0">Min Trading Days</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-6 border-bottom border-top border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">Unlimted</span></h4>
										<p class="m-0">Trading Period</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-6 border-bottom border-top border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">1:50</span></h4>
										<p class="m-0">Leverage</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-6 border-top border-bottom border-end ">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">90</span> %</h4>
										<p class="m-0">Profit Split</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-12 col-md-12 col-sm-12 ">
				<div class="card dz-card" id="custom-tab">
					<div class="tab-content" id="myTabContent1">
						<div class="tab-pane fade show active" id="DefaultTab1" role="tabpanel" aria-labelledby="home-tab1">
							<div class="card-header border-0 d-block pb-0">
								<h2 class="card-title mb-3">Payment Method</h2>
							</div>
							<div class="card-body pt-0">
								<!-- Nav tabs -->
								<div class="custom-tab-1">
									<ul class="nav nav-tabs">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#online-payment"><i class="la la-home me-2"></i> Online Payment</a>
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
														
														<h5>Coupon Code</h5>
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
														<button type="submit" class="btn btn-primary">Buy Now</button>
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
	</div>

@endsection
@push('scripts')
	<script src="{{ URL::asset('assets/vendor/chart-js/chart.bundle.min.js') }}"></script>
@endpush