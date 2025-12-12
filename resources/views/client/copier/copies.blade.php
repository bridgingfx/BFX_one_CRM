@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="col-xl-12 col-xxl-12">
				<!-- row -->
				@include('client.layouts.copiersummary')
				
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
										<button type="button" class="btn btn-danger btn-sm">Stop Copying <span class="btn-icon-end"><i class="fas fa-pause"></i></span></button> &nbsp;&nbsp;&nbsp;&nbsp;
										
										<button type="button" class="btn btn-light ml-3 btn-sm">Adjust Amount <span class="btn-icon-end"><i class="fas fa-money-bill-wave"></i></span> </button>
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
										<button type="button" class="btn btn-danger btn-sm">Stop Copying <span class="btn-icon-end"><i class="fas fa-pause"></i></span></button> &nbsp;&nbsp;&nbsp;&nbsp;
										
										<button type="button" class="btn btn-light ml-3 btn-sm">Adjust Amount <span class="btn-icon-end"><i class="fas fa-money-bill-wave"></i></span> </button>
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