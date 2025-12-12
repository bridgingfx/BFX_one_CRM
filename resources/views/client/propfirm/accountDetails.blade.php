@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ URL::asset('assets/vendor/chartist/css/chartist.min.css') }}">
@endpush
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-3 col-sm-12">
					<div class="card  digital-cash pull-up">
						<div class="card-header border-0">
							<h4 class="card-title">Hello Dude</h4>
						</div>
						<div class="card-body py-0 ">
							<div class="text-center">
								<div class="media d-block">
									<img src="assets/images/trophycon.png" width="100" class="img-fluid rounded-circle" alt="" />
									<div class="media-content">
										<h4 class="mt-0 mt-md-4 fs-20 font-w700 text-dark mb-3">CHAMPIONSHIP</h4>
										<div class="bootstrap-badge mb-2">
											<span class="badge light badge-warning">MT5</span>
											<span class="badge light badge-success">ID: 1234567890</span>
										</div>
										<div class="bootstrap-badge mb-2">
											<span class="badge hard badge-info fs-16">Stage: Challenge</span>
										</div>
										<div class="bootstrap-badge mb-2">
											<span class="badge hard badge-warning fs-14">Last Update: 25-12-2025 11:00:00</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer pt-0 border-0 text-center">
						</div>
					</div>
				</div>
				
				<div class="col-xl-3 col-sm-12">
					<div class="card digital-cash pull-up">
						<div class="card-header border-1">
							<h4 class="card-title">Account Details</h4>
						</div>
						<div class="card-body py-0 ">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex px-0 justify-content-between">
									<strong>Login</strong>
									<input type="text" class="form-control form-control-sm" style="max-width:60%" readonly value="1234567890" />
								</li>
								<li class="list-group-item d-flex px-0 justify-content-between">
									<strong>Master</strong>
									<input type="Password" class="form-control form-control-sm" style="max-width:60%" readonly value="1234567890" />
								</li>
								<li class="list-group-item d-flex px-0 justify-content-between">
									<strong>Investor</strong>
									<input type="Password" class="form-control form-control-sm" style="max-width:60%" readonly value="1234567890" />
								</li>
								<li class="list-group-item d-flex px-0 justify-content-between">
									<strong>Server</strong>
									<input type="text" class="form-control form-control-sm" style="max-width:60%" readonly value="BFX-MT5-SERVER" />
								</li>
							</ul>
						</div>
						<div class="card-footer pt-0 border-0 text-center">
						</div>
					</div>
				</div>
				
				<div class="col-xl-6 col-sm-12">
					<div class="card digital-cash pull-up">
						<div class="card-header border-1">
							<h4 class="card-title">Challenge Details</h4>
						</div>
						<div class="card-body py-0 ">
							<div class="row">
								<div class="col-4 border-end border-bottom">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0">$<span class="counter">5000</span></h4>
										<p class="m-0">Balance</p>
									</div>
								</div>
								<div class="col-4 border-bottom border-end ">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0">$<span class="counter">4999</span></h4>
										<p class="m-0">Equity</p>
									</div>
								</div>
								
								<div class="col-4 border-bottom  ">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0"><span class="fs-16 text-info">Bi-Weekly</span></h4>
										<p class="m-0">Withdraw Schedule</p>
									</div>
								</div>
								
								<div class="col-4 border-bottom border-end">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0">$<span class="counter">0</span></h4>
										<p class="text-danger fs-12 m-0">$5,000.00</p>
										<p class="m-0">Daily Drawdown </p>
									</div>
								</div>
								<div class="col-4 border-bottom border-end ">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0">$<span class="counter">0</span></h4>
										<p class="text-danger fs-12 m-0">$5,000.00</p>
										<p class="m-0">Drawdown Max</p>
									</div>
								</div>
								<div class="col-4 border-bottom">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0"><span class="counter">0</span></h4>
										<p class="text-danger fs-12 m-0">$5,000.00</p>
										<p class="m-0">Profit Target</p>
									</div>
								</div>
								
								<div class="col-4 border-bottom border-end ">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0">$<span class="counter">50000</span></h4>
										<p class="m-0">Start Equity/Day </p>
									</div>
								</div>
								<div class="col-4 border-bottom border-end ">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0">$<span class="counter">48500</span></h4>
										<p class="m-0">Disqualification Equity/Day</p>
									</div>
								</div>
								
								<div class="col-4 border-bottom ">
									<div class="pt-2 pb-2 ps-0 pe-0 text-center">
										<h4 class="m-0"><span class="counter">0</span>/<span class="text-info fs-12">3</span></h4>
										<p class="m-0">Minimum Trading Days</p>
									</div>
								</div>
								
							</div>
						</div>
						<div class="card-footer pt-0 border-0 text-center">
						</div>
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-xl-12 col-xxl-12">
					<div class="row">
						<div class="col-xl-9 col-md-9 col-sm-12 ">
							<div class="row">
								
								<div class="col-12">
									<div class="card">
										<div class="card-header border-0 d-block pb-0">
											<h2 class="card-title mb-3">Trade History</h2>
											<p>Currently active trading positions</p>
										</div>
										<div class="card-body pt-0 custome-tooltip pe-3">
											<div class="row">
												<div class="col-xl-3 col-lg-6 col-sm-6">
													<div class="widget-stat card pull-up">
														<div class="card-body p-4">
															<div class="media ai-icon" >
																<span class="me-3 bgl-primary text-primary" style="width:40px; height:40px;">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-5 h-5 text-gray-700" aria-hidden="true"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
																</span>
																<div class="media-body">
																	<p class="mb-1">Total PnL</p>
																	<h4 class="mb-0">$3280</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-xl-3 col-lg-6 col-sm-6">
													<div class="widget-stat card pull-up">
														<div class="card-body p-4">
															<div class="media ai-icon">
																<span class="me-3 bgl-warning text-warning" style="width:40px; height:40px;">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-5 h-5 text-gray-700" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
																</span>
																<div class="media-body">
																	<p class="mb-1">Win Rate</p>
																	<h4 class="mb-0">$2570</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-3  col-lg-6 col-sm-6">
													<div class="widget-stat card pull-up">
														<div class="card-body  p-4">
															<div class="media ai-icon">
																<span class="me-3 bgl-danger text-danger" style="width:40px; height:40px;">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity w-5 h-5 text-gray-700" aria-hidden="true"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg>
																</span>
																<div class="media-body">
																	<p class="mb-1">Total Lots</p>
																	<h4 class="mb-0">500</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-6 col-sm-6">
													<div class="widget-stat card pull-up">
														<div class="card-body p-4">
															<div class="media ai-icon">
																<span class="me-3 bgl-success text-success" style="width:40px; height:40px;">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy w-5 h-5 text-gray-700" aria-hidden="true"><path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"></path><path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"></path><path d="M18 9h1.5a1 1 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"></path><path d="M6 9H4.5a1 1 0 0 1 0-5H6"></path></svg>
																</span>
																<div class="media-body">
																	<p class="mb-1">Best Trade</p>
																	<h4 class="mb-0">$364.50K</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="table-responsive dataTabletrade">
												<table id="example-history" class="table shadow-hover ">
													<thead>
														<tr>
															<th>Date</th>
															<th>Symbol</th>
															<th>Type</th>
															<th>Lots</th>
															<th>Open Price</th>
															<th>Close Price</th>
															<th>Pips</th>
															<th>PnL</th>
															<th>Duration</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>2025-12-12</td>
															<td>
																<a class="market-title d-flex align-items-center" href="javascript:void(0);">
																	<div class="market-icon me-2">
																		<svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><circle cx="256" cy="256" fill="#4793ff" r="256"/><path d="m256 0c141.159 0 256 114.841 256 256s-114.841 256-256 256z" fill="#5e69e2"/><circle cx="256" cy="256" fill="#2ebeef" r="191.733"/><path d="m256 64.267c105.722 0 191.733 86.011 191.733 191.733s-86.011 191.733-191.733 191.733z" fill="#4793ff"/><g><path d="m243.519 127.179-80.333 120.5c-3.359 5.038-3.359 11.603 0 16.641l80.333 120.5c5.937 8.906 19.024 8.906 24.962 0l80.333-120.5c3.359-5.038 3.359-11.603 0-16.641l-80.333-120.5c-5.938-8.906-19.024-8.906-24.962 0z" fill="#76e5f6"/><path d="m256 275.375v116.125c4.756 0 9.512-2.226 12.481-6.679l80.333-120.5c1.562-2.343 2.388-5.015 2.497-7.711l-92.37 18.474c-.97.194-1.956.291-2.941.291z" fill="#2ebeef"/><path d="m256 120.5c-4.756 0-9.512 2.226-12.481 6.679l-80.333 120.5c-1.797 2.696-2.623 5.828-2.497 8.931l92.369 18.474c.971.194 1.957.291 2.942.291z" fill="#c2f4fb"/></g></g></svg>
																	</div>
																	BTC/USDT
																</a>
															</td>
															<td>
																<span class="badge badge-sm badge-success">Buy</span>
															</td>
															<td>0.5</td>
															<td>3.085</td>
															<td>3.485</td>
															<td>+90</td>
															<td>+$0.400</td>
															<td>2 hours ago</td>
														</tr>
														<tr>
															<td>2025-12-12</td>
															<td>
																<a class="market-title d-flex align-items-center" href="javascript:void(0);">
																	<div class="market-icon me-2">
																		<svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><circle cx="256" cy="256" fill="#4793ff" r="256"/><path d="m256 0c141.159 0 256 114.841 256 256s-114.841 256-256 256z" fill="#5e69e2"/><circle cx="256" cy="256" fill="#2ebeef" r="191.733"/><path d="m256 64.267c105.722 0 191.733 86.011 191.733 191.733s-86.011 191.733-191.733 191.733z" fill="#4793ff"/><g><path d="m243.519 127.179-80.333 120.5c-3.359 5.038-3.359 11.603 0 16.641l80.333 120.5c5.937 8.906 19.024 8.906 24.962 0l80.333-120.5c3.359-5.038 3.359-11.603 0-16.641l-80.333-120.5c-5.938-8.906-19.024-8.906-24.962 0z" fill="#76e5f6"/><path d="m256 275.375v116.125c4.756 0 9.512-2.226 12.481-6.679l80.333-120.5c1.562-2.343 2.388-5.015 2.497-7.711l-92.37 18.474c-.97.194-1.956.291-2.941.291z" fill="#2ebeef"/><path d="m256 120.5c-4.756 0-9.512 2.226-12.481 6.679l-80.333 120.5c-1.797 2.696-2.623 5.828-2.497 8.931l92.369 18.474c.971.194 1.957.291 2.942.291z" fill="#c2f4fb"/></g></g></svg>
																	</div>
																	BTC/USDT
																</a>
															</td>
															<td>
																<span class="badge badge-sm badge-success">Buy</span>
															</td>
															<td>0.5</td>
															<td>3.085</td>
															<td>3.485</td>
															<td>+90</td>
															<td>+$0.400</td>
															<td>2 hours ago</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-12">
									<div class="card">
										<div class="card-header border-0 d-block pb-0">
											<h2 class="card-title mb-3">Profit Calendar</h2>
										</div>
										<div class="card-body pt-0 custome-tooltip pe-3">
											<div id="revenueMap" class="revenueMap"></div>
										</div>
									</div>
								</div>
								
								<div class="col-12">
									<div class="card">
										<div class="card-header border-0 d-block pb-0">
											<h2 class="card-title mb-3">Chat View</h2>
										</div>
										<div class="card-body pt-0 custome-tooltip pe-3">
											<div id="bi-polar-line" class="ct-chart ct-golden-section chartlist-chart"></div>
										</div>
									</div>
								</div>
								
							</div>
						</div>						
						
						<div class="col-xl-3 col-md-3 col-sm-12 ">
							<div class="row">
								
								<div class="col-12">
									<div class="card">
										<div class="card-header border-1  d-block pb-0">
											<h2 class="card-title mb-3">Account Summary</h2>
										</div>
										<div class="card-body align-items-center">
											<div class="info-list">
												<ul class="list-group list-group-flush">
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Start Date</strong>
														<span class="mb-0 badge badge-danger">25-12-2025</span>
													</li>
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>End Date</strong>
														<span class="mb-0">30-12-2025</span>
													</li>
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Time Reset</strong>
														<span class="mb-0">23:00:00</span>
													</li>													
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="card banking-card">
										<div class="card-header border-1  d-block pb-0">
											<h2 class="card-title mb-3">Useful references</h2>
										</div>
										<div class="card-body align-items-center">
											<button type="button" class="btn btn-warning">Equity History <span class="btn-icon-end"><i class="fa fa-download"></i></span></button>
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
	<script src="{{ URL::asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
	<script>
	(function($) {
		"use strict"
		var dzChartlist = function(){
			
			var screenWidth = $(window).width();		
			var setChartWidth = function(){				
				if(screenWidth <= 768)
				{
					var chartBlockWidth = 0;
					if(screenWidth >= 500)
					{
						chartBlockWidth = 250;
					}else{
						chartBlockWidth = 300;
					}					
					jQuery('.chartlist-chart').css('min-width',chartBlockWidth - 31);
				}
			}
			
			var biPolarLineChart = function(){				  
				new Chartist.Line('#bi-polar-line', {
					labels: [1, 2, 3, 4, 5, 6, 7, 8],
					series: [
					  [1, 2, 3, 1, -2, 0, 1, 0],
					  [-2, -1, -2, -1, -2.5, -1, -2, -1],
					  [0, 0, 0, 1, 2, 2.5, 2, 1],
					  [2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
					]
				}, {
					high: 3,
					low: -3,
					showArea: true,
					showLine: false,
					showPoint: false,
					fullWidth: true,
					axisX: {
					  showLabel: false,
					  showGrid: false
					},
					plugins: [
					  Chartist.plugins.tooltip()
					]
				});				
			}
			
			return {
				init:function(){ },
				load:function(){
					setChartWidth();
					biPolarLineChart(); 
				},
				
				resize:function(){
					setChartWidth();
					biPolarLineChart();
				}
			}			 
		}();
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				dzChartlist.resize();	
			}, 1000);
		});

		jQuery(window).on('resize',function(){
			setTimeout(function(){
				dzChartlist.resize();	
			}, 1000);
			
		});     

	})(jQuery);
	</script>
@endpush