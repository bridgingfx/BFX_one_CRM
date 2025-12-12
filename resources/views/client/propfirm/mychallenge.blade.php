@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header border-0">
							<div class="d-flex flex-wrap">
								<select class="default-select p2p-select width-200 mb-2" aria-label="Default" tabindex="0" name="status">
									<option value="All">All Challenge</option>
								</select>
								<select class="default-select p2p-select width-200 mb-2" aria-label="Default" tabindex="0" name="status">
									<option value="All">All Platform</option>
									<option value="MT5">MT5</option>
								</select>
								<select class="default-select p2p-select width-200 mb-2" aria-label="Default" tabindex="0" name="status">
									<option value="All">All Period</option>
									<option value="Daily">Daily</option>
									<option value="Weekly">Weekly</option>
									<option value="Monthly">Monthly</option>
									<option value="Yearly">Yearly</option>
								</select>
								
							</div>
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
						<div class="col-xl-3 col-md-3 col-sm-12 ">
							<div class="card banking-card pull-up">
								<div class="card-header pb-0 border-0 flex-wrap">
									<div>
										<h4 class="card-title">CHAMPIONSHIP</h4>
										<p class="mb-xl-0 mb-4 fs-14">ID: 1234567890</p>
										<div class="bootstrap-badge">
											<span class="badge light badge-info">Contest</span>
											<span class="badge light badge-info">Biweekly</span>
										</div>
									</div>
									<div class="bootstrap-badge">
										<span class="badge light badge-success">Active</span>
									</div>
								</div>
								<div class="card-body px-3">
									<div class="row">
										<div class="col-6 border-end border-top border-bottom">
											<div class="pt-2 pb-2 ps-0 pe-0 text-center">
												<h4 class="m-0">$<span class="counter">5000</span></h4>
												<p class="m-0">Balance</p>
											</div>
										</div>
										<div class="col-6 border-bottom border-top">
											<div class="pt-2 pb-2 ps-0 pe-0 text-center">
												<h4 class="m-0">$<span class="counter">4999</span></h4>
												<p class="m-0">Equity</p>
											</div>
										</div>
										<div class="col-6 border-bottom border-end">
											<div class="pt-2 pb-2 ps-0 pe-0 text-center">
												<h4 class="m-0">$<span class="counter">0</span></h4>
												<p class="text-danger fs-12 m-0">$5,000.00</p>
												<p class="m-0">Daily Drawdown </p>
											</div>
										</div>
										<div class="col-6 border-bottom ">
											<div class="pt-2 pb-2 ps-0 pe-0 text-center">
												<h4 class="m-0">$<span class="counter">0</span></h4>
												<p class="text-danger fs-12 m-0">$5,000.00</p>
												<p class="m-0">Drawdown Max</p>
											</div>
										</div>
										<div class="col-6 border-bottom border-end">
											<div class="pt-2 pb-2 ps-0 pe-0 text-center">
												<h4 class="m-0"><span class="counter">0</span></h4>
												<p class="text-danger fs-12 m-0">$5,000.00</p>
												<p class="m-0">Profit Target</p>
											</div>
										</div>
										<div class="col-6 border-bottom">
											<div class="pt-2 pb-2 ps-0 pe-0 text-center">
												<h4 class="m-0"><span class="counter">0</span>/<span class="text-info fs-12">3</span></h4>
												<p class="m-0">Minimum Trading Days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body pb-0 mb-3 pt-0 custome-tooltip d-flex align-items-center">
									<a href="{{ route('propfirm.challengesDetails') }}" class="btn btn-success btn-sm light text-uppercase btn-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg> View Dashboard</a>
									
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-md-3 col-sm-12 ">
							<div class="card banking-card">
								<div class="card-header border-0 pb-0">
									<h4 class="card-title">MT5-123456789</h4>									
								</div>
								<div class="card-body px-3">
									<div class="d-flex justify-content-between align-items-center">
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
								<div class="card-body pb-0 mb-3 pt-0 custome-tooltip d-flex align-items-center">
									<a href="{{ route('propfirm.challengesDetails') }}" class="btn btn-success btn-sm light text-uppercase btn-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg> View Dashboard</a>
									
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