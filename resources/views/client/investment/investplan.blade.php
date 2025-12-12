@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header border-0">
							<div class="d-flex flex-wrap">
								<select class="default-select p2p-select width-200 mb-2" aria-label="Default" tabindex="0" name="status" placeholder="Investment Period" >
									<option value="All">All Period</option>
									<option value="Daily">Daily</option>
									<option value="Weekly">Weekly</option>
									<option value="Monthly">Monthly</option>
									<option value="Yearly">Yearly</option>
								</select>
								
								<select class="default-select p2p-select width-200 mb-2" aria-label="Default" tabindex="0" name="status" placeholder="Filter By Return">
									<option value="All">All Return</option>
									<option value="fix">Fix Return</option>
									<option value="variable">Variable Return</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-12 col-xxl-12">
					<div class="row">
						<div class="col-xl-3 col-sm-12">
							<div class="card  digital-cash pull-up">
								<div class="card-header border-1">
									<h4 class="card-title">Min Live</h4>
								</div>
								<div class="card-body py-0 mt-3">
									<div class="text-center">
										<div class="media d-block">
											<div class="media-content">
												<div class="bootstrap-badge mb-2">
													<span class="badge light badge-warning fs-14 mb-1">Low Risk</span>
													<span class="badge light badge-success fs-14 mb-1">Monthly</span>
													<span class="badge light badge-info fs-14 mb-1">Variable Return</span>
												</div>
												
												<div class="info-list">
													<ul class="list-group list-group-flush">
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Min Investment</strong>
															<span class="mb-0">$<span class="counter">5000</span></span>
														</li>
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Period</strong>
															<span class="mb-0">90 Days</span>
														</li>
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Return</strong>
															<span class="mb-0">15% - 18%</span>
														</li>													
													</ul>
												</div>
											</div>
										</div>
										<div class="mt-3 mb-3 pt-0 d-flex align-items-center">
											<a href="#" class="btn btn-success btn-sm light text-uppercase btn-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg> Invest Now</a>
										</div>
									</div>
								</div>								
							</div>
						</div>
						
						<div class="col-xl-3 col-sm-12">
							<div class="card  digital-cash pull-up">
								<div class="card-header border-1">
									<h4 class="card-title">Super Live</h4>
								</div>
								<div class="card-body py-0 mt-3">
									<div class="text-center">
										<div class="media d-block">
											<div class="media-content">
												<div class="bootstrap-badge mb-2">
													<span class="badge light badge-warning fs-14 mb-1">Low Risk</span>
													<span class="badge light badge-success fs-14 mb-1">Monthly</span>
													<span class="badge light badge-info fs-14 mb-1">Variable Return</span>
												</div>
												
												<div class="info-list">
													<ul class="list-group list-group-flush">
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Min Investment</strong>
															<span class="mb-0">$<span class="counter">5000</span></span>
														</li>
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Period</strong>
															<span class="mb-0">90 Days</span>
														</li>
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Return</strong>
															<span class="mb-0">15% - 18%</span>
														</li>													
													</ul>
												</div>
											</div>
										</div>
										<div class="mt-3 mb-3 pt-0 d-flex align-items-center">
											<a href="#" class="btn btn-success btn-sm light text-uppercase btn-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg> Invest Now</a>
										</div>
									</div>
								</div>								
							</div>
						</div>
						
						<div class="col-xl-3 col-sm-12">
							<div class="card  digital-cash pull-up">
								<div class="card-header border-1">
									<h4 class="card-title">Max Live</h4>
								</div>
								<div class="card-body py-0 mt-3">
									<div class="text-center">
										<div class="media d-block">
											<div class="media-content">
												<div class="bootstrap-badge mb-2">
													<span class="badge light badge-warning fs-14 mb-1">Low Risk</span>
													<span class="badge light badge-success fs-14 mb-1">Monthly</span>
													<span class="badge light badge-info fs-14 mb-1">Variable Return</span>
												</div>
												
												<div class="info-list">
													<ul class="list-group list-group-flush">
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Min Investment</strong>
															<span class="mb-0">$<span class="counter">5000</span></span>
														</li>
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Period</strong>
															<span class="mb-0">90 Days</span>
														</li>
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Return</strong>
															<span class="mb-0">15% - 18%</span>
														</li>													
													</ul>
												</div>
											</div>
										</div>
										<div class="mt-3 mb-3 pt-0 d-flex align-items-center">
											<a href="#" class="btn btn-success btn-sm light text-uppercase btn-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg> Invest Now</a>
										</div>
									</div>
								</div>								
							</div>
						</div>
						
						<div class="col-xl-3 col-sm-12">
							<div class="card  digital-cash pull-up">
								<div class="card-header border-1">
									<h4 class="card-title">Growth Live</h4>
								</div>
								<div class="card-body py-0 mt-3">
									<div class="text-center">
										<div class="media d-block">
											<div class="media-content">
												<div class="bootstrap-badge mb-2">
													<span class="badge light badge-warning fs-14 mb-1">Low Risk</span>
													<span class="badge light badge-success fs-14 mb-1">Monthly</span>
													<span class="badge light badge-info fs-14 mb-1">Variable Return</span>
												</div>
												
												<div class="info-list">
													<ul class="list-group list-group-flush">
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Min Investment</strong>
															<span class="mb-0">$<span class="counter">5000</span></span>
														</li>
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Period</strong>
															<span class="mb-0">90 Days</span>
														</li>
														<li class="list-group-item d-flex px-0 justify-content-between">
															<strong>Return</strong>
															<span class="mb-0">15% - 18%</span>
														</li>													
													</ul>
												</div>
											</div>
										</div>
										<div class="mt-3 mb-3 pt-0 d-flex align-items-center">
											<a href="#" class="btn btn-success btn-sm light text-uppercase btn-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right w-4 h-4" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg> Invest Now</a>
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