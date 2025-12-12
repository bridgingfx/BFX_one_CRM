@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">				
				<div class="col-xl-12 col-xxl-12">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="widget-stat card pull-up">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3 bgl-primary text-primary">
											<!-- <i class="ti-user"></i> -->
											<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet text-blue-600" aria-hidden="true"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path></svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Balance</p>
											<h4 class="mb-0">$3280</h4>
											<span class="badge badge-primary">+3.5%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="widget-stat card pull-up">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3 bgl-warning text-warning">
											<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign text-blue-600" aria-hidden="true"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Equity</p>
											<h4 class="mb-0">$2570</h4>
											<span class="badge badge-warning">+3.5%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3  col-lg-6 col-sm-6">
							<div class="widget-stat card pull-up">
								<div class="card-body  p-4">
									<div class="media ai-icon">
										<span class="me-3 bgl-danger text-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column text-blue-600" aria-hidden="true"><path d="M3 3v16a2 2 0 0 0 2 2h16"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Margin Level</p>
											<h4 class="mb-0">$364.50K</h4>
											<span class="badge badge-danger">-3.5%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="widget-stat card pull-up">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3 bgl-success text-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target text-blue-600" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Free Margin</p>
											<h4 class="mb-0">$364.50K</h4>
											<span class="badge badge-success">-3.5%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-xxl-12">
					<div class="row">
						<div class="col-xl-9 col-md-9 col-sm-12 ">
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-header border-0 d-block pb-0">
											<h2 class="card-title mb-3">Trade History</h2>
											<div class="d-flex justify-content-between">
												<div class="market-data">
													<div class="income data">
														<span>This Month</span>
														<h4>$29.999.00</h4>
													</div>
													<div class="price data">
														<span>Price</span>
														<h4 class="d-flex align-items-center">480 <span
																class="ms-2 text-danger">- 0,5%</span></h4>
													</div>
													<div class="rate data">
														<span>Rate</span>
														<h4>-0.0662%/hr</h4>
													</div>
													<div class="volume data">
														<span>volume</span>
														<h4>175k</h4>
													</div>
												</div>
												<div class="d-flex align-items-center">
													<div class="dropdown bootstrap-select">
														<select class="default-select form-control w-100"
															aria-label="Default" tabindex="0">
															<option selected="">This Month</option>
															<option value="1">Weeks</option>
															<option value="2">Today</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body pt-0 custome-tooltip pe-3">
											<div id="revenueMap" class="revenueMap"></div>
										</div>
									</div>
								</div>
								
								<div class="col-12">
									<div class="card">
										<div class="card-header border-0 d-block pb-0">
											<h2 class="card-title mb-3">Open Positions</h2>
											<p>Currently active trading positions</p>
										</div>
										<div class="card-body pt-0 custome-tooltip pe-3">
											<div class="table-responsive dataTabletrade">
												<table id="example-history" class="table shadow-hover ">
													<thead>
														<tr>
															<th>Position</th>
															<th>Symbol</th>
															<th>Type</th>
															<th>Size</th>
															<th>Price</th>
															<th>PnL</th>
															<th>Time</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>#721934</td>
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
															<td>0.50</td>
															<td>2421.30 <small>2441.30</small></td>
															<td>+$120.00</td>
															<td>2 hours ago</td>
														</tr>
														<tr>
															<td>#721934</td>
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
															<td>0.50</td>
															<td>2421.30 <small>2441.30</small></td>
															<td>+$120.00</td>
															<td>2 hours ago</td>
														</tr>
														<tr>
															<td>#721934</td>
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
															<td>0.50</td>
															<td>2421.30 <small>2441.30</small></td>
															<td>+$120.00</td>
															<td>2 hours ago</td>
														</tr>
														<tr>
															<td>#721934</td>
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
															<td>0.50</td>
															<td>2421.30 <small>2441.30</small></td>
															<td>+$120.00</td>
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
																	<p class="mb-1">Total Traded Lots</p>
																	<h4 class="mb-0">$364.50K</h4>
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
								
							</div>
						</div>						
						<div class="col-xl-3 col-md-3 col-sm-12 ">
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-header border-0 pb-0">
											<h4 class="card-title">Current Graph</h4>
											<div class="dropdown custom-dropdown mb-0 tbl-orders-style">
												<div class="btn sharp tp-btn" data-bs-toggle="dropdown" role="button" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</div>
										<div class="card-body text-center">
											<div id="pieChart" class="d-inline-block"></div>
											<div class="chart-items">
												<div class=" col-xl-12 col-sm-12">
													<div class="row text-dark text-start fs-13 mt-4">
														<span class="mb-3 col-6 pe-0">
															<svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect width="14" height="14" rx="4" fill="#2BC844"/>
															</svg>
															Profit $0
														</span>
														<span class="mb-3 col-6 pe-0">
															<svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect width="14" height="14" rx="4" fill="#FF5166"/>
															</svg>
															Loss $0
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="card">
										<div class="card-header border-1  d-block pb-0">
											<h2 class="card-title mb-3">Account Summary</h2>
										</div>
										<div class="card-body align-items-center">
											<div class="info-list">
												<ul class="list-group list-group-flush">
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Account Type</strong>
														<span class="mb-0 badge badge-danger">Standard</span>
													</li>
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Open Positions</strong>
														<span class="mb-0">3</span>
													</li>
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Floating PnL</strong>
														<span class="mb-0">+$150.00</span>
													</li>
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Realized PnL</strong>
														<span class="mb-0">+$150.00</span>
													</li>
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Unrealized PnL</strong>
														<span class="mb-0">+$150.00</span>
													</li>
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Used Margin</strong>
														<span class="mb-0">$6,928.12</span>
													</li>
													<li class="list-group-item d-flex px-0 justify-content-between">
														<strong>Margin Level</strong>
														<span class="mb-0">23.5%</span>
													</li>
													
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="card banking-card">
										<div class="card-header border-1  d-block pb-0">
											<h2 class="card-title mb-3">Quick Actions</h2>
										</div>
										<div class="card-body align-items-center">								
											
											<a href="javascript:void(0)" class="btn btn-success btn-lg light text-uppercase btn-block mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg> Deposit</a>
											
											
											<a href="javascript:void(0)" class="btn btn-danger btn-lg light text-uppercase btn-block mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right w-4 h-4" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg> Withdraw</a>

											<a href="javascript:void(0)" class="btn btn-info btn-lg light text-uppercase btn-block "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card w-4 h-4" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg> Transfer</a>
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