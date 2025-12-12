@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="col-xl-12 col-xxl-12">
				@include('client.layouts.pammsummary')
				
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Portfolio Allocation</h4>
							</div>
							<div class="card-body">
								<div class="d-flex mb-3">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="ps-2 w-100 flex-1">
										<h6 class="">Nova Capital</h6>
										<div class="progress mt-2 h-auto">
											<div class="progress-bar bg-primary" style="width:35% ; height:6px;"></div>
										</div>
										<div class="mt-2"><span>35%</span></div>
									</div>
								</div>
								<div class="d-flex mb-3">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="ps-2 w-100 flex-1">
										<h6 class="">Orion FX</h6>
										<div class="progress mt-2 h-auto">
											<div class="progress-bar bg-secondary" style="width:50% ; height:6px;"></div>
										</div>
										<div class="mt-2"><span>50%</span></div>
									</div>
								</div>
								<div class="d-flex mb-3">
									<div class="d-block">
										<img src="assets/images/profile/pic1.jpg" class="avatar avatar-xxl border-primary rounded-circle" alt="">
									</div>
									<div class="ps-2 w-100 flex-1">
										<h6 class="">Orion FX</h6>
										<div class="progress mt-2 h-auto">
											<div class="progress-bar bg-secondary" style="width:50% ; height:6px;"></div>
										</div>
										<div class="mt-2"><span>50%</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Performance Metrics</h4>
							</div>
							<div class="card-body">
								<div class="info-list">
									<ul class="list-group list-group-flush">
										<li class="list-group-item d-flex px-0 justify-content-between">
											<strong>Total Return</strong>
											<span class="text-success">+9.5%</span>
										</li>
										<li class="list-group-item d-flex px-0 justify-content-between">
											<strong>Monthly Avg</strong>
											<span class="mb-0">+9.5%</span>
										</li>
										<li class="list-group-item d-flex px-0 justify-content-between">
											<strong>Best Month</strong>
											<span class="mb-0 text-success">+5&</span>
										</li>
										<li class="list-group-item d-flex px-0 justify-content-between">
											<strong>Worst Month</strong>
											<span class="mb-0 text-danger">-2.5%</span>
										</li>
										<li class="list-group-item d-flex px-0 justify-content-between">
											<strong>Sharpe Ratio</strong>
											<span class="mb-0 text-warning">1.98</span>
										</li>										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Monthly Performance Chart</h4>
							</div>
							<div class="card-body">
								<canvas id="barChart_2"></canvas>
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
	<script>
	(function($) {
		"use strict" 
		var dzSparkLine = function(){			
			var screenWidth = $(window).width();
			
			var barChart2 = function(){
				if(jQuery('#barChart_2').length > 0 ){

				//gradient bar chart
					const barChart_2 = document.getElementById("barChart_2").getContext('2d');
					//generate gradient
					const barChart_2gradientStroke = barChart_2.createLinearGradient(0, 0, 0, 250);
					barChart_2gradientStroke.addColorStop(0, "rgba(55,54,175,1)");
					barChart_2gradientStroke.addColorStop(1, "rgba(235, 129, 83, 0.5)");

					barChart_2.height = 100;
					// Get the reference to the existing chart with ID 'barChart_2'
					var existingChart = Chart.getChart(barChart_2.canvas.id);

					// Check if the chart exists
					if (existingChart) {
						// Destroy the existing chart
						existingChart.destroy();
					}

					var config = {
						type: 'bar',
						data: {
							defaultFontFamily: 'Poppins',
							labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
							datasets: [
								{
									label: "My First dataset",
									data: [65, 59, 80, 81, 56, 55, 40, 75, 50, 35, 25, 0],
									borderColor: barChart_2gradientStroke,
									borderWidth: "0",
									backgroundColor: barChart_2gradientStroke, 
									hoverBackgroundColor: barChart_2gradientStroke,
									barPercentage: 0.5,
									//barThickness: 50,
								}
							]
						},
						options: {
							plugins:{
									legend: false
							},
							scales: {
								y:{
									ticks: {
										beginAtZero: true
									}
								},
								x: {
									// Change here
									barPercentage: 0.5
								}
							}
						}
					};
					var barChart = new Chart(barChart_2, config);

						var element = document.querySelector('body');
						var observer = new MutationObserver(function(mutations) {
							mutations.forEach(function(mutation) {
								if(mutation.attributeName === "data-theme-version"){
									if($('body').attr('data-theme-version') === "dark"){
										config.options.scales.y.grid.color = '#3d3d4e'
										config.options.scales.x.grid.color = '#3d3d4e'
									}else{
										config.options.scales.y.grid.color = '#eee'
										config.options.scales.x.grid.color = '#eee'
									}
									barChart.update();
								}
							});
						});
						observer.observe(element, {
							attributes: true
						});
				
				}
			}
			
			return {
				init:function(){ },
				load:function(){	
					barChart2();
				},
				resize:function(){	
					// barChart2(); 
				}
			}
		}();
		jQuery(window).on('load',function(){
			dzSparkLine.load();
		});

		jQuery(window).on('resize',function(){
			//dzSparkLine.resize();
			setTimeout(function(){ dzSparkLine.resize(); }, 1000);
		});
	})(jQuery);
	</script>
@endpush