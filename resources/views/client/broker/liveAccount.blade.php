@extends('layouts.app')
@push('styles')
	<style>
		.top-nav-tabs {
			background: #fff;
			border: 1px solid #eef0f4;
			border-radius: 14px;
			padding: 10px;
			gap: 10px;
		}

		.top-nav-tabs .nav-link {
			border-radius: 12px;
			padding: 10px 18px;
			color: #0f172a;
			font-weight: 600;
			text-transform: uppercase;
			display: inline-flex;
			align-items: center;
			gap: 10px;
		}

		.top-nav-tabs .nav-link i {
			width: 18px;
			height: 18px;
		}

		.top-nav-tabs .nav-link.active {
			background: var(--primary);
			color: #fff;
		}

		.account-table {
			border-collapse: separate;
			border-spacing: 0;
		}

		.account-table thead th {
			background: #f8fafc;
			border-bottom: 1px solid #e9edf3;
			padding: 14px 16px;
			font-weight: 700;
			font-size: 11px;
			text-transform: uppercase;
			color: #64748b;
			text-align: left;
		}

		.account-table tbody td {
			padding: 16px;
			border-bottom: 1px solid #e9edf3;
			vertical-align: middle;
		}

		.account-table tbody tr:last-child td {
			border-bottom: none;
		}

		.account-icon {
			width: 48px;
			height: 48px;
			border-radius: 12px;
			background: linear-gradient(135deg, #10b981, #fbbf24);
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
			flex-shrink: 0;
		}

		.account-icon .badge-5 {
			position: absolute;
			bottom: -4px;
			right: -4px;
			width: 20px;
			height: 20px;
			border-radius: 50%;
			background: var(--primary);
			color: #fff;
			font-size: 10px;
			font-weight: 700;
			display: flex;
			align-items: center;
			justify-content: center;
			border: 2px solid #fff;
		}

		.account-info h6 {
			margin: 0;
			font-weight: 700;
			font-size: 16px;
			color: #0f172a;
		}

		.account-info small {
			color: #64748b;
			font-size: 12px;
		}

		.action-btn {
			border-radius: 8px;
			padding: 8px 16px;
			font-size: 12px;
			font-weight: 600;
			text-transform: uppercase;
		}

		.sidebar-card {
			border-radius: 14px;
			padding: 20px;
			margin-bottom: 16px;
			transition: transform 0.2s ease;
		}

		.sidebar-card.create-account {
			background: linear-gradient(135deg, #1f4c7a, #0b2e57);
			color: #fff;
		}

		.sidebar-card.create-account h5 {
			color: #fff;
			font-weight: 700;
			margin: 0 0 4px;
		}

		.sidebar-card.create-account p {
			color: rgba(255, 255, 255, 0.9);
			margin: 0;
			font-size: 12px;
		}

		.sidebar-card.quick-action {
			background: #fff;
			border: 1px solid #e9edf3;
			box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
		}

		.sidebar-card.quick-action h6 {
			margin: 0;
			font-weight: 700;
			font-size: 14px;
			color: #0f172a;
		}

		.quick-icon {
			width: 48px;
			height: 48px;
			border-radius: 12px;
			background: rgba(16, 185, 129, 0.12);
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.quick-icon i {
			width: 24px;
			height: 24px;
			color: #10b981;
		}

		.create-icon {
			width: 48px;
			height: 48px;
			border-radius: 12px;
			background: rgba(255, 255, 255, 0.14);
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.create-icon i {
			width: 24px;
			height: 24px;
			color: #fff;
		}
	</style>
@endpush
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			{{-- Top Navigation Tabs --}}
			<div class="row mb-4">
				<div class="col-12">
					<nav class="w-100">
						<div class="nav nav-pills top-nav-tabs w-100" role="tablist">
							<a class="nav-link active" href="{{ route('broker.liveaccount') }}">
								<i data-lucide="shield"></i> {{ __('Live Accounts') }}
							</a>
							<a class="nav-link" href="{{ route('broker.demoaccount') }}">
								<i data-lucide="hexagon"></i> {{ __('Demo Accounts') }}
							</a>
							<a class="nav-link" href="#">
								<i data-lucide="download"></i> {{ __('Platform Download') }}
							</a>
						</div>
					</nav>
				</div>
			</div>

			<div class="row g-4">
				{{-- Main Content Area --}}
				<div class="col-xl-9 col-lg-8">
					<div class="card">
						<div class="card-header border-0 d-flex align-items-center justify-content-between flex-wrap">
							<h4 class="card-title mb-0">{{ __('My Trading Live Accounts') }}</h4>
							<a href="{{ route('broker.createLiveaccount') }}" class="btn btn-outline-primary">
								{{ __('Open New Live Account') }}
							</a>
						</div>
						<div class="card-body p-0">
							<div class="table-responsive">
								<table class="account-table w-100">
									<thead>
										<tr>
											<th style="width: 50px;"></th>
											<th>{{ __('Account') }}</th>
											<th>{{ __('LEVERAGE') }}</th>
											<th>{{ __('BALANCE') }}</th>
											<th>{{ __('EQUITY') }}</th>
											<th class="text-end">{{ __('Actions') }}</th>
										</tr>
									</thead>
									<tbody>
										{{-- Account 1 --}}
										<tr>
											<td>
												<div class="account-icon">
													<i data-lucide="globe"
														style="width: 24px; height: 24px; color: #fff;"></i>
													<span class="badge-5">5</span>
												</div>
											</td>
											<td>
												<div class="account-info">
													<h6>473411</h6>
													<small>LGFX_10_01</small>
												</div>
											</td>
											<td>
												<span class="fw-bold">200</span>
											</td>
											<td>
												<span class="fw-bold">$ 0.00</span>
											</td>
											<td>
												<span class="fw-bold">$ 0</span>
											</td>
											<td class="text-end">
												<div class="d-flex gap-2 justify-content-end">
													<a href="{{ route('broker.accountdetails') }}"
														class="btn btn-outline-secondary btn-sm action-btn">
														{{ __('View') }} →
													</a>
													<a href="{{ route('funds.funddeposit') }}"
														class="btn btn-outline-primary btn-sm action-btn">
														{{ __('Deposit') }} ▤
													</a>
												</div>
											</td>
										</tr>
										{{-- Account 2 --}}
										<tr>
											<td>
												<div class="account-icon">
													<i data-lucide="globe"
														style="width: 24px; height: 24px; color: #fff;"></i>
													<span class="badge-5">5</span>
												</div>
											</td>
											<td>
												<div class="account-info">
													<h6>820690</h6>
													<small>LGFX-01</small>
												</div>
											</td>
											<td>
												<span class="fw-bold">500</span>
											</td>
											<td>
												<span class="fw-bold">$ 0.00</span>
											</td>
											<td>
												<span class="fw-bold">$ 0</span>
											</td>
											<td class="text-end">
												<div class="d-flex gap-2 justify-content-end">
													<a href="{{ route('broker.accountdetails') }}"
														class="btn btn-outline-secondary btn-sm action-btn">
														{{ __('View') }} →
													</a>
													<a href="{{ route('funds.funddeposit') }}"
														class="btn btn-outline-primary btn-sm action-btn">
														{{ __('Deposit') }} ▤
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				{{-- Right Sidebar --}}
				<div class="col-xl-3 col-lg-4">
					{{-- Create Account Card --}}
					<a href="{{ route('broker.createLiveaccount') }}" class="text-decoration-none">
						<div class="sidebar-card create-account">
							<div class="d-flex align-items-center justify-content-between">
								<div>
									<h5>{{ __('Create Account') }}</h5>
									<p>{{ __('Open Live Account') }}</p>
								</div>
								<div class="create-icon">
									<i data-lucide="folder-plus"></i>
								</div>
							</div>
						</div>
					</a>

					{{-- Quick Deposit Card --}}
					<a href="{{ route('funds.funddeposit') }}" class="text-decoration-none">
						<div class="sidebar-card quick-action">
							<div class="d-flex align-items-center justify-content-between">
								<h6>{{ __('Quick Deposit') }}</h6>
								<div class="quick-icon">
									<i data-lucide="zap"></i>
								</div>
							</div>
						</div>
					</a>

					{{-- Quick Withdraw Card --}}
					<a href="{{ route('funds.fundwithdrawal') }}" class="text-decoration-none">
						<div class="sidebar-card quick-action">
							<div class="d-flex align-items-center justify-content-between">
								<h6>{{ __('Quick Withdraw') }}</h6>
								<div class="quick-icon">
									<i data-lucide="zap"></i>
								</div>
							</div>
						</div>
					</a>

					{{-- My Profile Card --}}
					<a href="{{ route('profile.edit') }}" class="text-decoration-none">
						<div class="sidebar-card quick-action">
							<div class="d-flex align-items-center justify-content-between">
								<h6>{{ __('My Profile') }}</h6>
								<div class="quick-icon">
									<i data-lucide="user"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

@endsection
@push('scripts')
	<script>
		// Initialize Lucide icons
		if (typeof lucide !== 'undefined') {
			lucide.createIcons();
		}
	</script>
@endpush