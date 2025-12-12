@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="col-xl-12 col-xxl-12">
				<!-- row -->
				@include('client.layouts.pammsummary')
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="card">
							<div class="card-header border-0">
								<div class="clearfix">
									<h3 class="card-title">Total Invested</h3>
									<span>across 2 managers</span>
								</div>
								<div class="clearfix text-center">
									<h3 class="text-primary mb-0">$8000</h3>
									<span>+11.5% </span>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card">
							<div class="card-header border-0 ">
								<div class="clearfix">
									<h3 class="card-title">Current Value</h3>
									<span class="text-danger"></span>
								</div>
								<div class="clearfix text-center">
									<h3 class="text-danger mb-0">$8300</h3>
									<span>+$627 (+7.8%)</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card overflow-hidden">
							<div class="card-header border-0 ">
								<div class="clearfix">
									<h3 class="card-title">Avg Duration</h3>
									<span>months</span>
								</div>
								<div class="clearfix text-center">
									<h3 class="text-success mb-0">4</h3>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12">
						<div class="card pull-up">
							<div class="card-body border-0 d-block ">
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
										
									</div>
								</div>
								<div class="d-flex justify-content-between">
									<div class="market-data">
										<div class="income data">
											<span>Invested</span>
											<h4>$29,999</h4>
										</div>
										<div class="price data">
											<span>Current Value</span>
											<h4>$35,999</h4>
										</div>
										<div class="rate data">
											<span>P&L</span>
											<h4 class="text-success">+$124</h4>
										</div>
										<div class="volume data">
											<span>Return</span>
											<h4 class="text-success">+12.4%</h4>
										</div>
										<div class="volume data">
											<span>Start Date</span>
											<h4>2025-11-19</h4>
										</div>
									</div>
									<div class="d-flex">
										<button type="button" class="btn btn-info btn-sm">Add Fund <span class="btn-icon-end"><i class="fas fa-plus"></i></span></button> &nbsp;&nbsp;&nbsp;&nbsp;
										
										<button type="button" class="btn btn-danger btn-sm">Withdraw <span class="btn-icon-end"><i class="fas fa-minus"></i></span></button> &nbsp;&nbsp;&nbsp;&nbsp;
										
										<button type="button" class="btn btn-light ml-3 btn-sm">View Details <span class="btn-icon-end"><i class="fas fa-eye"></i></span> </button>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-12">
						<div class="card pull-up">
							<div class="card-body border-0 d-block ">
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
										
									</div>
								</div>
								<div class="d-flex justify-content-between">
									<div class="market-data">
										<div class="income data">
											<span>Invested</span>
											<h4>$29,999</h4>
										</div>
										<div class="price data">
											<span>Current Value</span>
											<h4>$35,999</h4>
										</div>
										<div class="rate data">
											<span>P&L</span>
											<h4 class="text-success">+$124</h4>
										</div>
										<div class="volume data">
											<span>Return</span>
											<h4 class="text-success">+12.4%</h4>
										</div>
										<div class="volume data">
											<span>Start Date</span>
											<h4>2025-11-19</h4>
										</div>
									</div>
									<div class="d-flex">
										<button type="button" class="btn btn-info btn-sm">Add Fund <span class="btn-icon-end"><i class="fas fa-plus"></i></span></button> &nbsp;&nbsp;&nbsp;&nbsp;
										
										<button type="button" class="btn btn-danger btn-sm">Withdraw <span class="btn-icon-end"><i class="fas fa-minus"></i></span></button> &nbsp;&nbsp;&nbsp;&nbsp;
										
										<button type="button" class="btn btn-light ml-3 btn-sm">View Details <span class="btn-icon-end"><i class="fas fa-eye"></i></span> </button>
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
	
@endpush