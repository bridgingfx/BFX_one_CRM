@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header border-0">
							<div class="d-flex flex-wrap">
								<div class="input-group width-300 mb-2">
									<input type="text" class="form-control amount" placeholder="Search Accounts" />
								</div>								
								<select class="default-select p2p-select m-md-0 width-100 mb-2" aria-label="Default" tabindex="0" name="status">
									<option value="All">All Status</option>
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
									<option value="Suspended">Suspended</option>
								</select>
							</div>
							<nav>
								<div class="nav nav-pills light justify-content-center gap-lg-0 gap-3" id="nav-tab-p2p" role="tablist">
									<button type="button" class="btn btn-primary" style="margin-right:10px" onclick="window.location='{{route('broker.createaccount') }}'" ><i class="fa fa-plus me-2"></i> Create Account</button>
									<button type="button" class="btn btn-success" style="margin-right:10px" onclick="window.location='{{route('broker.liveaccount') }}'" ><i class="fa fa-plus me-2"></i> Live Account</button>
									<button type="button" class="btn btn-warning" style="margin-right:10px" onclick="window.location='{{route('broker.demoaccount') }}'" ><i class="fa fa-plus me-2"></i> Demo Account</button>
								</div>
							</nav>
						</div>
					</div>
				</div>
				
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
						<div class="col-xl-4 col-md-6 col-sm-12 ">
							<div class="card banking-card">
								<div class="card-header border-0 pb-0">
									<h4 class="card-title">MT5-123456789</h4>
									<div class="dropdown custom-dropdown mb-0 tbl-orders-style">
										<div class="btn sharp tp-btn" data-bs-toggle="dropdown" role="button" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-end" style="">
											<a class="dropdown-item" href="javascript:void(0);">See Credentials</a>
											<a class="dropdown-item" href="{{ route('broker.accountdetails') }}">Details</a>
											<a class="dropdown-item" href="javascript:void(0);">Analytics</a>
											<a class="dropdown-item" href="javascript:void(0);">Reset password</a>
										</div>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="d-flex justify-content-around align-items-center">
										<div class="overflow-hidden custome-tooltip">
											<div class="chartRound"></div>
										</div>
									</div>
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
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Free Margin</p>
											</div>
										</div>
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Positions</p>
											</div>
										</div>
										<div class="col-4 border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">P & L</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body pb-0 mb-3 pt-0 custome-tooltip d-flex justify-content-center gap-2 align-items-center">
                                    <a href="javascript:void(0)"
                                        class="btn btn-success btn-sm light text-uppercase"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true">
                                            <path d="m7 7 10 10"></path>
                                            <path d="M17 7v10H7"></path>
                                        </svg> Deposit</a>
                                    <a href="javascript:void(0)"
                                        class="btn btn-danger btn-sm light text-uppercase"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-up-right w-4 h-4" aria-hidden="true">
                                            <path d="M7 7h10v10"></path>
                                      	      <path d="M7 17 17 7"></path>
                                        </svg> Withdraw</a>
                                    <a href="javascript:void(0)"
                                        class="btn btn-info btn-sm light text-uppercase  "><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-credit-card w-4 h-4" aria-hidden="true">
                                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                            <line x1="2" x2="22" y1="10" y2="10"></line>
                                        </svg> Transfer</a>
                                </div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-sm-12 ">
							<div class="card banking-card">
								<div class="card-header border-0 pb-0">
									<h4 class="card-title">MT5-123456789</h4>
									<div class="dropdown custom-dropdown mb-0 tbl-orders-style">
										<div class="btn sharp tp-btn" data-bs-toggle="dropdown" role="button" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-end" style="">
											<a class="dropdown-item" href="javascript:void(0);">See Credentials</a>
											<a class="dropdown-item" href="{{ route('broker.accountdetails') }}">Details</a>
											<a class="dropdown-item" href="javascript:void(0);">Analytics</a>
											<a class="dropdown-item" href="javascript:void(0);">Reset password</a>
										</div>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="d-flex justify-content-around align-items-center">
										<div class="overflow-hidden custome-tooltip">
											<div class="chartRound"></div>
										</div>
									</div>
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
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Free Margin</p>
											</div>
										</div>
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Positions</p>
											</div>
										</div>
										<div class="col-4 border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">P & L</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body pb-0 mb-3 pt-0 custome-tooltip d-flex justify-content-center gap-2 align-items-center">
                                    <a href="javascript:void(0)"
                                        class="btn btn-success btn-sm light text-uppercase"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true">
                                            <path d="m7 7 10 10"></path>
                                            <path d="M17 7v10H7"></path>
                                        </svg> Deposit</a>
                                    <a href="javascript:void(0)"
                                        class="btn btn-danger btn-sm light text-uppercase"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-up-right w-4 h-4" aria-hidden="true">
                                            <path d="M7 7h10v10"></path>
                                      	      <path d="M7 17 17 7"></path>
                                        </svg> Withdraw</a>
                                    <a href="javascript:void(0)"
                                        class="btn btn-info btn-sm light text-uppercase  "><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-credit-card w-4 h-4" aria-hidden="true">
                                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                            <line x1="2" x2="22" y1="10" y2="10"></line>
                                        </svg> Transfer</a>
                                </div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-sm-12 ">
							<div class="card banking-card">
								<div class="card-header border-0 pb-0">
									<h4 class="card-title">MT5-123456789</h4>
									<div class="dropdown custom-dropdown mb-0 tbl-orders-style">
										<div class="btn sharp tp-btn" data-bs-toggle="dropdown" role="button" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-end" style="">
											<a class="dropdown-item" href="javascript:void(0);">See Credentials</a>
											<a class="dropdown-item" href="{{ route('broker.accountdetails') }}">Details</a>
											<a class="dropdown-item" href="javascript:void(0);">Analytics</a>
											<a class="dropdown-item" href="javascript:void(0);">Reset password</a>
										</div>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="d-flex justify-content-around align-items-center">
										<div class="overflow-hidden custome-tooltip">
											<div class="chartRound"></div>
										</div>
									</div>
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
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Free Margin</p>
											</div>
										</div>
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Positions</p>
											</div>
										</div>
										<div class="col-4 border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">P & L</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body pb-0 mb-3 pt-0 custome-tooltip d-flex justify-content-center gap-2 align-items-center">
                                    <a href="javascript:void(0)"
                                        class="btn btn-success btn-sm light text-uppercase"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true">
                                            <path d="m7 7 10 10"></path>
                                            <path d="M17 7v10H7"></path>
                                        </svg> Deposit</a>
                                    <a href="javascript:void(0)"
                                        class="btn btn-danger btn-sm light text-uppercase"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-up-right w-4 h-4" aria-hidden="true">
                                            <path d="M7 7h10v10"></path>
                                      	      <path d="M7 17 17 7"></path>
                                        </svg> Withdraw</a>
                                    <a href="javascript:void(0)"
                                        class="btn btn-info btn-sm light text-uppercase  "><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-credit-card w-4 h-4" aria-hidden="true">
                                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                            <line x1="2" x2="22" y1="10" y2="10"></line>
                                        </svg> Transfer</a>
                                </div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-sm-12 ">
							<div class="card banking-card">
								<div class="card-header border-0 pb-0">
									<h4 class="card-title">MT5-123456789</h4>
									<div class="dropdown custom-dropdown mb-0 tbl-orders-style">
										<div class="btn sharp tp-btn" data-bs-toggle="dropdown" role="button" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="var(--text-dark)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-end" style="">
											<a class="dropdown-item" href="javascript:void(0);">See Credentials</a>
											<a class="dropdown-item" href="{{ route('broker.accountdetails') }}">Details</a>
											<a class="dropdown-item" href="javascript:void(0);">Analytics</a>
											<a class="dropdown-item" href="javascript:void(0);">Reset password</a>
										</div>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="d-flex justify-content-around align-items-center">
										<div class="overflow-hidden custome-tooltip">
											<div class="chartRound"></div>
										</div>
									</div>
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
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">Free Margin</p>
											</div>
										</div>
										<div class="col-4 border-bottom border-end">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">119</span> k</h4>
												<p class="m-0">Positions</p>
											</div>
										</div>
										<div class="col-4 border-bottom">
											<div class="pt-3 pb-3 ps-0 pe-0 text-center">
												<h4 class="m-1"><span class="counter">89</span> k</h4>
												<p class="m-0">P & L</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body pb-0 mb-3 pt-0 custome-tooltip d-flex justify-content-center gap-2 align-items-center">
                                    <a href="javascript:void(0)"
                                        class="btn btn-success btn-sm light text-uppercase"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true">
                                            <path d="m7 7 10 10"></path>
                                            <path d="M17 7v10H7"></path>
                                        </svg> Deposit</a>
                                    <a href="javascript:void(0)"
                                        class="btn btn-danger btn-sm light text-uppercase"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-up-right w-4 h-4" aria-hidden="true">
                                            <path d="M7 7h10v10"></path>
                                      	      <path d="M7 17 17 7"></path>
                                        </svg> Withdraw</a>
                                    <a href="javascript:void(0)"
                                        class="btn btn-info btn-sm light text-uppercase  "><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-credit-card w-4 h-4" aria-hidden="true">
                                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                            <line x1="2" x2="22" y1="10" y2="10"></line>
                                        </svg> Transfer</a>
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