@extends('layouts.app')
@push('styles')
<link href="{{ URL::asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush


@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-12 col-xxl-12">
					<div class="row">
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="card banking-card pull-up">
								<div class="card-header border-1 p-2 d-flex">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="w-100 ps-2">
										<div class="justify-content-between">
											<h4 class="card-title mb-1"> 2100272350 </h4>
											<span> Sync-ProCAP </span> 
										</div>
									</div>
									<div class="bootstrap-badge">
										<span class="badge light badge-primary">Master (Copy Trading)</span>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="row">
										<div class="col-4 border-end border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Balance</p>
											</div>
										</div>
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Equity</p>
											</div>
										</div>
										<div class="col-4 border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Margin</p>
											</div>
										</div>
										<div class="col-4 border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Free Margin</p>
											</div>
										</div>
										<div class="col-4 border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Positions</p>
											</div>
										</div>
										<div class="col-4 ">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">P & L</p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-footer mb-2 mt-2 d-flex align-items-center">
									<a href="javascript:void(0)" class="btn btn-warning btn-sm light text-uppercase btn-block me-3">Subscribe</a>
									<a href="javascript:void(0)" class="btn btn-info btn-sm light text-uppercase btn-block"> View Profile</a>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="card banking-card pull-up">
								<div class="card-header border-1 p-2 d-flex">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="w-100 ps-2">
										<div class="justify-content-between">
											<h4 class="card-title mb-1"> 2100272350 </h4>
											<span> Sync-ProCAP </span> 
										</div>
									</div>
									<div class="bootstrap-badge">
										<span class="badge light badge-primary">Master (Copy Trading)</span>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="row">
										<div class="col-4 border-end border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Balance</p>
											</div>
										</div>
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Equity</p>
											</div>
										</div>
										<div class="col-4 border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Margin</p>
											</div>
										</div>
										<div class="col-4 border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Free Margin</p>
											</div>
										</div>
										<div class="col-4 border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Positions</p>
											</div>
										</div>
										<div class="col-4 ">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">P & L</p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-footer mb-2 mt-2 d-flex align-items-center">
									<a href="javascript:void(0)" class="btn btn-warning btn-sm light text-uppercase btn-block me-3">Subscribe</a>
									<a href="javascript:void(0)" class="btn btn-info btn-sm light text-uppercase btn-block"> View Profile</a>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="card banking-card pull-up">
								<div class="card-header border-1 p-2 d-flex">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="w-100 ps-2">
										<div class="justify-content-between">
											<h4 class="card-title mb-1"> 2100272350 </h4>
											<span> Sync-ProCAP </span> 
										</div>
									</div>
									<div class="bootstrap-badge">
										<span class="badge light badge-primary">Master (Copy Trading)</span>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="row">
										<div class="col-4 border-end border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Balance</p>
											</div>
										</div>
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Equity</p>
											</div>
										</div>
										<div class="col-4 border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Margin</p>
											</div>
										</div>
										<div class="col-4 border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Free Margin</p>
											</div>
										</div>
										<div class="col-4 border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Positions</p>
											</div>
										</div>
										<div class="col-4 ">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">P & L</p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-footer mb-2 mt-2 d-flex align-items-center">
									<a href="javascript:void(0)" class="btn btn-warning btn-sm light text-uppercase btn-block me-3">Subscribe</a>
									<a href="javascript:void(0)" class="btn btn-info btn-sm light text-uppercase btn-block"> View Profile</a>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="card banking-card pull-up">
								<div class="card-header border-1 p-2 d-flex">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="w-100 ps-2">
										<div class="justify-content-between">
											<h4 class="card-title mb-1"> 2100272350 </h4>
											<span> Sync-ProCAP </span> 
										</div>
									</div>
									<div class="bootstrap-badge">
										<span class="badge light badge-primary">Master (Copy Trading)</span>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="row">
										<div class="col-4 border-end border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Balance</p>
											</div>
										</div>
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Equity</p>
											</div>
										</div>
										<div class="col-4 border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Margin</p>
											</div>
										</div>
										<div class="col-4 border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Free Margin</p>
											</div>
										</div>
										<div class="col-4 border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Positions</p>
											</div>
										</div>
										<div class="col-4 ">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">P & L</p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-footer mb-2 mt-2 d-flex align-items-center">
									<a href="javascript:void(0)" class="btn btn-warning btn-sm light text-uppercase btn-block me-3">Subscribe</a>
									<a href="javascript:void(0)" class="btn btn-info btn-sm light text-uppercase btn-block"> View Profile</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						
					</div>
					
					
					
					
					
				</div>				
			
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header flex-wrap border-0">
							<h4 class="card-title mb-lg-0 mb-2">Trading Market List</h4>
							<ul class=" nav nav-pills light" id="pills-tab" role="tablist">
								<li class="nav-item my-1" role="presentation">
									<button class="nav-link active" id="pills-crypto-tab" data-bs-toggle="pill"
										data-bs-target="#pills-crypto" type="button" role="tab"
										aria-controls="pills-crypto" aria-selected="true">Rising Traders</button>
								</li>
								<li class="nav-item my-1" role="presentation">
									<button class="nav-link" id="pills-spot-tab" data-bs-toggle="pill"
										data-bs-target="#pills-spot" type="button" role="tab"
										aria-controls="pills-spot" aria-selected="false">Popular investors</button>
								</li>
							</ul>
						</div>
						<div class="card-body pt-0">
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-crypto" role="tabpanel" aria-labelledby="pills-crypto-tab">
									<div class="table-responsive dataTabletrade">
										<table id="example-history" class="table shadow-hover display  orderbookTable" style="min-width:845px">
											<thead>
												<tr>
													<th>Account</th>
													<th>Type</th>
													<th>ROI</th>
													<th></th>
													<th>P & L</th>
													<th>Max DD</th>
													<th>Risk</th>
													<th>Followed By</th>
													<th>Aum</th>
													<th>Active Since</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="d-flex">
															<div class="d-block">
																<img src="assets/images/profile/pic1.jpg" class="avatar position-relative avatar-md avatar-rounded bg-light me-2" alt="">
															</div>
															<div class=" ps-2">
																<div class="d-flex justify-content-between">
																	<div class="">
																		<h6 class="mb-1"> Gold Swing Pro </h6>
																		<span> by Forex </span> 
																	</div>
																</div>
															</div>
														</div>
													</td>
													<td>Master MAM</td>
													<td><span class="text-success">92.75%</span></td>
													<td></td>
													<td>$<span class="text-success">46769.77</span></td>
													<td><span class="text-danger">13.46%</span></td>
													<td><span class="badge light badge-warning">Moderate</span></td>
													<td>25</td>
													<td>94835.90</td>
													<td>10, Apr 2025</td>
													<td class="text-end"><a href="javascript:void(0)" class="badge badge-sm light badge-info">Subscribe</a> &nbsp; <a href="javascript:void(0)" class="badge badge-sm badge-success">View Profile</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
								<div class="tab-pane fade" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
									<div class="table-responsive dataTabletrade">
										<table id="example-history-1" class="table shadow-hover display  orderbookTable" style="min-width:845px">
											<thead>
												<tr>
													<th>Account</th>
													<th>Type</th>
													<th>ROI</th>
													<th></th>
													<th>P & L</th>
													<th>Max DD</th>
													<th>Risk</th>
													<th>Followed By</th>
													<th>Aum</th>
													<th>Active Since</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="d-flex">
															<div class="d-block">
																<img src="assets/images/profile/pic1.jpg" class="avatar position-relative avatar-md avatar-rounded bg-light me-2" alt="">
															</div>
															<div class=" ps-2">
																<div class="d-flex justify-content-between">
																	<div class="">
																		<h6 class="mb-1"> Gold Swing Pro </h6>
																		<span> by Forex </span> 
																	</div>
																</div>
															</div>
														</div>
													</td>
													<td>Master MAM</td>
													<td><span class="text-success">92.75%</span></td>
													<td></td>
													<td>$<span class="text-success">46769.77</span></td>
													<td><span class="text-danger">13.46%</span></td>
													<td><span class="badge light badge-warning">Moderate</span></td>
													<td>25</td>
													<td>94835.90</td>
													<td>10, Apr 2025</td>
													<td class="text-end"><a href="javascript:void(0)" class="badge badge-sm light badge-info">Subscribe</a> &nbsp; <a href="javascript:void(0)" class="badge badge-sm badge-success">View Profile</a></td>
												</tr>
											</tbody>
										</table>
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
	<script src="{{ URL::asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script>
	(function($) {
		"use strict" 
		var dzSparkLine = function(){
			var table = $('#example-history, #example-history-1').DataTable({
				searching: false,
				paging:true,
				select: false,				
				pageLength:8, 				
				language: {
					paginate: {
					  next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
					  previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>' 
					}
				}
			});
			
		}();
	})(jQuery);
	</script>
@endpush