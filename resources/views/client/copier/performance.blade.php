@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="col-xl-12 col-xxl-12">
				@include('client.layouts.copiersummary')
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="card">
							<div class="card-header border-0">
								<div class="clearfix">
									<h3 class="card-title">Total Return</h3>
									<span>overall</span>
								</div>
								<div class="clearfix text-center">
									<h3 class="text-primary mb-0">+$173</h3>
									<span>+11.5% </span>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card">
							<div class="card-header border-0 ">
								<div class="clearfix">
									<h3 class="card-title">Total Invested</h3>
									<span class="text-danger">across 2 strategies</span>
								</div>
								<div class="clearfix text-center">
									<h3 class="text-danger mb-0">$1,500</h3>
									<span></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card overflow-hidden">
							<div class="card-header border-0 ">
								<div class="clearfix">
									<h3 class="card-title">Active Since</h3>
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