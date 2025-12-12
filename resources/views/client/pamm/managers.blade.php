@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="col-xl-12 col-xxl-12">
				<!-- row -->
				@include('client.layouts.pammsummary')
				
				<div class="row">
					<div class="col-xl-4 col-sm-12">
						<div class="card justify-content-center pull-up">
							<div class="card-body ">
								<div class="d-flex mb-3">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="w-100 ps-4">
										<div class="d-flex justify-content-between">
											<div class="">
												<h4 class="card-title mb-1"> Gold Swing Pro </h4>
												<span> by Forex </span> 
											</div>
										</div>
									</div>
									<div class="d-flex">
										<ul class="star-rating">
											<li><i class="fa fa-star"></i> 4</li>
										</ul>
									</div>
								</div>
								<div class="bootstrap-badge">
									<span class="badge light badge-primary"><i class="fa fa-user-group"></i> 1150</span>
									<span class="badge light badge-secondary"><i class="fa fa-usd"></i> 3.5M</span>
									<span class="badge light badge-warning">Low Risk</span>
								</div>
								
								<div class="mt-3">
									<p>Professional gold trading strategy focusing on swing trades with strict risk management.</p>
								</div>
								<div class="row text-center">
									<div class="col-6 mb-2">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">12.9%</h4>
											<small>Monthly Return</small>
										</div>
									</div>
									<div class="col-6 mb-2">
										<div class="bgl-danger rounded p-3">
											<h4 class="mb-0">5.1%</h4>
											<small>Max Drawdown</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-success rounded p-3">
											<h4 class="mb-0">78%</h4>
											<small>Win Rate</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-info rounded p-3">
											<h4 class="mb-0">$500</h4>
											<small>Min Copy</small>
										</div>
									</div>
								</div>
								<div class="row mt-3 ">
									<div class="col-4 border-start border-top border-end border-bottom">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">74</span> %</h4>
											<p class="m-0">Win Rate</p>
										</div>
									</div>
									<div class="col-4 border-top border-bottom border-end">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">8.2</span> %</h4>
											<p class="m-0">Max DD</p>
										</div>
									</div>
									<div class="col-4 border-top border-end border-bottom">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">156</span></h4>
											<p class="m-0">Investors</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer mt-0">
								<button class="btn btn-primary btn-sm btn-block">Allocated Funds</button>
							</div>
						</div>
					</div>
					
					<div class="col-xl-4 col-sm-12">
						<div class="card justify-content-center pull-up">
							<div class="card-body ">
								<div class="d-flex mb-3">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="w-100 ps-4">
										<div class="d-flex justify-content-between">
											<div class="">
												<h4 class="card-title mb-1"> Gold Swing Pro </h4>
												<span> by Forex </span> 
											</div>
										</div>
									</div>
									<div class="d-flex">
										<ul class="star-rating">
											<li><i class="fa fa-star"></i> 4</li>
										</ul>
									</div>
								</div>
								<div class="bootstrap-badge">
									<span class="badge light badge-primary"><i class="fa fa-user-group"></i> 1150</span>
									<span class="badge light badge-secondary"><i class="fa fa-usd"></i> 3.5M</span>
									<span class="badge light badge-warning">Low Risk</span>
								</div>
								
								<div class="mt-3">
									<p>Professional gold trading strategy focusing on swing trades with strict risk management.</p>
								</div>
								<div class="row text-center">
									<div class="col-6 mb-2">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">12.9%</h4>
											<small>Monthly Return</small>
										</div>
									</div>
									<div class="col-6 mb-2">
										<div class="bgl-danger rounded p-3">
											<h4 class="mb-0">5.1%</h4>
											<small>Max Drawdown</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-success rounded p-3">
											<h4 class="mb-0">78%</h4>
											<small>Win Rate</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-info rounded p-3">
											<h4 class="mb-0">$500</h4>
											<small>Min Copy</small>
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-4 border-start border-top border-end border-bottom">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">74</span> %</h4>
											<p class="m-0">Win Rate</p>
										</div>
									</div>
									<div class="col-4 border-top border-bottom border-end">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">8.2</span> %</h4>
											<p class="m-0">Max DD</p>
										</div>
									</div>
									<div class="col-4 border-top border-end border-bottom">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">156</span></h4>
											<p class="m-0">Investors</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer mt-0">
								<button class="btn btn-primary btn-sm btn-block">Allocated Funds</button>
							</div>
						</div>
					</div>
					
					<div class="col-xl-4 col-sm-12">
						<div class="card justify-content-center pull-up">
							<div class="card-body ">
								<div class="d-flex mb-3">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="w-100 ps-4">
										<div class="d-flex justify-content-between">
											<div class="">
												<h4 class="card-title mb-1"> Gold Swing Pro </h4>
												<span> by Forex </span> 
											</div>
										</div>
									</div>
									<div class="d-flex">
										<ul class="star-rating">
											<li><i class="fa fa-star"></i> 4</li>
										</ul>
									</div>
								</div>
								<div class="bootstrap-badge">
									<span class="badge light badge-primary"><i class="fa fa-user-group"></i> 1150</span>
									<span class="badge light badge-secondary"><i class="fa fa-usd"></i> 3.5M</span>
									<span class="badge light badge-warning">Low Risk</span>
								</div>
								
								<div class="mt-3">
									<p>Professional gold trading strategy focusing on swing trades with strict risk management.</p>
								</div>
								<div class="row text-center">
									<div class="col-6 mb-2">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">12.9%</h4>
											<small>Monthly Return</small>
										</div>
									</div>
									<div class="col-6 mb-2">
										<div class="bgl-danger rounded p-3">
											<h4 class="mb-0">5.1%</h4>
											<small>Max Drawdown</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-success rounded p-3">
											<h4 class="mb-0">78%</h4>
											<small>Win Rate</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-info rounded p-3">
											<h4 class="mb-0">$500</h4>
											<small>Min Copy</small>
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-4 border-start border-top border-end border-bottom">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">74</span> %</h4>
											<p class="m-0">Win Rate</p>
										</div>
									</div>
									<div class="col-4 border-top border-bottom border-end">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">8.2</span> %</h4>
											<p class="m-0">Max DD</p>
										</div>
									</div>
									<div class="col-4 border-top border-end border-bottom">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">156</span></h4>
											<p class="m-0">Investors</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer mt-0">
								<button class="btn btn-primary btn-sm btn-block">Allocated Funds</button>
							</div>
						</div>
					</div>
					
					<div class="col-xl-4 col-sm-12">
						<div class="card justify-content-center pull-up">
							<div class="card-body ">
								<div class="d-flex mb-3">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="w-100 ps-4">
										<div class="d-flex justify-content-between">
											<div class="">
												<h4 class="card-title mb-1"> Gold Swing Pro </h4>
												<span> by Forex </span> 
											</div>
										</div>
									</div>
									<div class="d-flex">
										<ul class="star-rating">
											<li><i class="fa fa-star"></i> 4</li>
										</ul>
									</div>
								</div>
								<div class="bootstrap-badge">
									<span class="badge light badge-primary"><i class="fa fa-user-group"></i> 1150</span>
									<span class="badge light badge-secondary"><i class="fa fa-usd"></i> 3.5M</span>
									<span class="badge light badge-warning">Low Risk</span>
								</div>
								
								<div class="mt-3">
									<p>Professional gold trading strategy focusing on swing trades with strict risk management.</p>
								</div>
								<div class="row text-center">
									<div class="col-6 mb-2">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">12.9%</h4>
											<small>Monthly Return</small>
										</div>
									</div>
									<div class="col-6 mb-2">
										<div class="bgl-danger rounded p-3">
											<h4 class="mb-0">5.1%</h4>
											<small>Max Drawdown</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-success rounded p-3">
											<h4 class="mb-0">78%</h4>
											<small>Win Rate</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-info rounded p-3">
											<h4 class="mb-0">$500</h4>
											<small>Min Copy</small>
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-4 border-start border-top border-end border-bottom">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">74</span> %</h4>
											<p class="m-0">Win Rate</p>
										</div>
									</div>
									<div class="col-4 border-top border-bottom border-end">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">8.2</span> %</h4>
											<p class="m-0">Max DD</p>
										</div>
									</div>
									<div class="col-4 border-top border-end border-bottom">
										<div class="pt-3 pb-3 ps-0 pe-0 text-center">
											<h4 class="m-1"><span class="counter">156</span></h4>
											<p class="m-0">Investors</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer mt-0">
								<button class="btn btn-primary btn-sm btn-block">Allocated Funds</button>
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