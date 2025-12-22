@extends('layouts.app')
@push('styles')
	<style>
		.account-logo {
			width: 56px;
			height: 56px;
			border-radius: 50%;
			background: linear-gradient(135deg, #10b981, #4793ff);
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 24px;
			font-weight: 700;
			color: #fff;
			flex-shrink: 0;
		}

		.account-id {
			font-size: 24px;
			font-weight: 700;
			color: #0f172a;
		}

		.balance-card {
			background: linear-gradient(135deg, #1e293b, #334155);
			border-radius: 16px;
			padding: 24px;
			color: #fff;
			position: relative;
			overflow: hidden;
		}

		.balance-card::before {
			content: "";
			position: absolute;
			top: -50%;
			right: -20%;
			width: 200%;
			height: 200%;
			background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
			pointer-events: none;
		}

		.balance-card h5 {
			color: rgba(255, 255, 255, 0.8);
			font-size: 14px;
			font-weight: 600;
			margin-bottom: 8px;
		}

		.balance-card .balance-amount {
			font-size: 32px;
			font-weight: 700;
			margin-bottom: 16px;
		}

		.balance-card .balance-icon {
			width: 48px;
			height: 48px;
			border-radius: 12px;
			background: rgba(255, 255, 255, 0.15);
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 16px;
		}

		.balance-card .balance-icon i {
			width: 24px;
			height: 24px;
			color: #fff;
		}

		.quick-deposit-btn {
			background: #334155;
			border: none;
			border-radius: 10px;
			padding: 10px 20px;
			color: #fff;
			font-weight: 600;
			font-size: 14px;
		}

		.detail-card {
			background: #fff;
			border: 1px solid #e9edf3;
			border-radius: 12px;
			padding: 20px;
		}

		.detail-card .detail-icon i {
			width: 20px;
			height: 20px;
			color: #64748b;
		}

		.detail-card .detail-label {
			font-size: 14px;
			color: #64748b;
			font-weight: 600;
		}

		.detail-card .detail-value {
			font-size: 16px;
			font-weight: 600;
			color: #0f172a;
		}

		.action-card {
			background: #fff;
			border-radius: 12px;
			padding: 20px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.action-card .action-content h6 {
			font-size: 16px;
			font-weight: 700;
			color: #0f172a;
			margin: 0 0 4px;
		}

		.action-card .action-content p {
			font-size: 12px;
			color: #64748b;
			margin: 0;
		}

		.action-card .action-icon {
			width: 40px;
			height: 40px;
			border-radius: 10px;
			background: #f8fafc;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.action-card .action-icon i {
			width: 20px;
			height: 20px;
			color: #64748b;
		}

		.metric-item {
			background: #fff;
			border: 1px solid #e9edf3;
			border-radius: 12px;
			padding: 16px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.metric-item .metric-left {
			display: flex;
			align-items: center;
			gap: 12px;
		}

		.metric-item .metric-icon {
			width: 36px;
			height: 36px;
			border-radius: 8px;
			background: #f8fafc;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.metric-item .metric-icon i {
			width: 18px;
			height: 18px;
			color: #64748b;
		}

		.metric-item .metric-label {
			font-size: 14px;
			font-weight: 600;
			color: #0f172a;
		}

		.metric-item .metric-value {
			font-size: 16px;
			font-weight: 700;
			color: #0f172a;
		}

		.action-button {
			border-radius: 12px;
			padding: 20px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			width: 100%;
			cursor: pointer;
			height: 100%;
		}

		.action-button.deposit {
			background: linear-gradient(135deg, #1f4c7a, #0b2e57);
			color: #fff;
		}

		.action-button.withdraw {
			background: #334155;
			color: #fff;
		}

		.action-button .btn-content h6 {
			font-size: 16px;
			font-weight: 700;
			margin: 0 0 4px;
			color: #fff;
		}

		.action-button .btn-content p {
			font-size: 12px;
			margin: 0;
			opacity: 0.9;
			color: #fff;
		}

		.action-button .btn-icon {
			width: 48px;
			height: 48px;
			border-radius: 12px;
			background: rgba(255, 255, 255, 0.15);
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.action-button .btn-icon i {
			width: 24px;
			height: 24px;
			color: #fff;
		}

		.table-card {
			background: #fff;
			border-radius: 12px;
			border: 1px solid #e9edf3;
			overflow: hidden;
		}

		.table-card .card-header {
			background: #f8fafc;
			border-bottom: 1px solid #e9edf3;
			padding: 16px 20px;
		}

		.table-card .card-header h5 {
			font-size: 16px;
			font-weight: 700;
			color: #0f172a;
			margin: 0;
		}

		.table-controls {
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 16px 20px;
			background: #f8fafc;
			border-bottom: 1px solid #e9edf3;
		}

		.table-controls .entries-select {
			display: flex;
			align-items: center;
			gap: 8px;
		}

		.table-controls .entries-select select {
			border: 1px solid #e9edf3;
			border-radius: 6px;
			padding: 6px 12px;
			font-size: 14px;
		}

		.table-controls .search-input {
			display: flex;
			align-items: center;
			gap: 8px;
		}

		.table-controls .search-input input {
			border: 1px solid #e9edf3;
			border-radius: 6px;
			padding: 6px 12px;
			font-size: 14px;
		}

		.data-table {
			width: 100%;
			border-collapse: collapse;
		}

		.data-table thead th {
			background: #f8fafc;
			padding: 12px 16px;
			text-align: left;
			font-size: 11px;
			font-weight: 700;
			text-transform: uppercase;
			color: #64748b;
			border-bottom: 1px solid #e9edf3;
		}

		.data-table tbody td {
			padding: 16px;
			border-bottom: 1px solid #e9edf3;
			font-size: 14px;
			color: #0f172a;
		}

		.data-table tbody tr:last-child td {
			border-bottom: none;
		}

		.table-pagination {
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 16px 20px;
			background: #f8fafc;
			border-top: 1px solid #e9edf3;
		}

		.table-pagination .pagination-info {
			font-size: 14px;
			color: #64748b;
		}

		.table-pagination .pagination-buttons {
			display: flex;
			gap: 8px;
		}

		.table-pagination .pagination-buttons button {
			border: 1px solid #e9edf3;
			background: #fff;
			border-radius: 6px;
			padding: 6px 12px;
			font-size: 14px;
			cursor: pointer;
		}

		.table-pagination .pagination-buttons button:hover {
			background: #f8fafc;
		}

		.empty-state {
			padding: 40px;
			text-align: center;
			color: #64748b;
			font-size: 14px;
		}

		/* Password Modal Styles */
		.password-modal-header .modal-title {
			font-size: 20px;
		}

		.password-modal-header .btn-close {
			font-size: 24px;
		}

		.password-modal-label {
			font-size: 14px;
			font-weight: 600;
			color: #64748b;
		}

		.password-modal-account {
			font-size: 18px;
			font-weight: 700;
			color: #0f172a;
		}

		.password-modal-description {
			font-size: 14px;
			color: #64748b;
			line-height: 1.6;
			margin-bottom: 0;
		}

		.password-toggle-btn {
			position: absolute;
			right: 12px;
			top: 50%;
			transform: translateY(-50%);
			background: none;
			border: none;
			padding: 0;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.password-toggle-icon {
			width: 20px;
			height: 20px;
			color: #64748b;
		}

		.password-requirements {
			background: #f8fafc;
			border-radius: 8px;
			padding: 16px;
		}

		.requirement-item {
			display: flex;
			align-items: center;
			gap: 8px;
			font-size: 13px;
			color: #64748b;
			margin-bottom: 8px;
		}

		.requirement-item:last-child {
			margin-bottom: 0;
		}

		.requirement-icon {
			width: 16px;
			height: 16px;
			color: #10b981;
			flex-shrink: 0;
		}
	</style>
@endpush
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			{{-- Account Header --}}
			<div class="alert alert-secondary d-flex align-items-center gap-3 mb-4">
				<div class="account-logo">5</div>
				<div class="account-id">473411</div>
			</div>

			<div class="row g-4 mb-3">
				{{-- Left Column --}}
				<div class="col-sm-6">
					{{-- Balance Card --}}
					<div class="balance-card mb-4">
						<div class="d-flex align-items-start justify-content-between">
							<div>
								<h5>{{ __('Balance') }}</h5>
								<div class="d-flex align-items-center gap-3">
									<div class="balance-icon">
										<i data-lucide="wallet"></i>
									</div>
									<div class="balance-amount">$0</div>
								</div>
							</div>
							<a href="{{ route('funds.funddeposit') }}" class="quick-deposit-btn">
								{{ __('Quick Deposit') }}
							</a>
						</div>
					</div>

					{{-- Account Details Grid --}}
					<div class="row g-3">
						<div class="col-md-6">
							<div class="detail-card">
								<div class="d-flex align-items-center gap-2 mb-3">
									<i data-lucide="server"></i>
									<div class="detail-label">{{ __('Server') }}</div>
								</div>
								<div class="detail-value">Liberty Markets Ltd.</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="detail-card">
								<div class="d-flex align-items-center gap-2 mb-3">
									<i data-lucide="leaf"></i>
									<div class="detail-label">{{ __('Credit') }}</div>
								</div>
								<div class="detail-value">$0</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="detail-card">
								<div class="d-flex align-items-center gap-2 mb-3">
									<i data-lucide="scale"></i>
									<div class="detail-label">{{ __('Leverage') }}</div>
								</div>
								<div class="detail-value">1:200</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="detail-card">
								<div class="d-flex align-items-center gap-2 mb-3">
									<i data-lucide="arrow-left-right"></i>
									<div class="detail-label">{{ __('Swap') }}</div>
								</div>
								<div class="detail-value">{{ __('yes') }}</div>
							</div>
						</div>
					</div>
				</div>
				{{-- Right Column --}}
				<div class="col-sm-6">
					<div class="vstack gap-3">
						{{-- Account Metrics --}}
						<div class="metric-item">
							<div class="metric-left">
								<div class="metric-icon">
									<i data-lucide="trending-up"></i>
								</div>
								<div class="metric-label">{{ __('Equity') }}</div>
							</div>
							<div class="metric-value">$0</div>
						</div>

						<div class="metric-item">
							<div class="metric-left">
								<div class="metric-icon">
									<i data-lucide="infinity"></i>
								</div>
								<div class="metric-label">{{ __('Free Margin') }}</div>
							</div>
							<div class="metric-value">$0</div>
						</div>

						<div class="metric-item">
							<div class="metric-left">
								<div class="metric-icon">
									<i data-lucide="pie-chart"></i>
								</div>
								<div class="metric-label">{{ __('Margin') }}</div>
							</div>
							<div class="metric-value">-</div>
						</div>

						<div class="metric-item">
							<div class="metric-left">
								<div class="metric-icon">
									<i data-lucide="pie-chart"></i>
								</div>
								<div class="metric-label">{{ __('Margin Level') }}</div>
							</div>
							<div class="metric-value">0%</div>
						</div>

						<div class="metric-item">
							<div class="metric-left">
								<div class="metric-icon">
									<i data-lucide="venus"></i>
								</div>
								<div class="metric-label">{{ __('Floating P&L') }}</div>
							</div>
							<div class="metric-value">0</div>
						</div>
					</div>
				</div>
			</div>

			{{-- Internal, Password, Deposit, Withdraw in one row --}}
			<div class="row g-3 mb-4">
				<div class="col-lg-3 col-md-6">
					<a href="{{ route('funds.fundtransfer') }}">
						<div class="action-card">
							<div class="action-content">
								<h6>{{ __('Internal') }}</h6>
								<p>{{ __('Transfer') }}</p>
							</div>
							<div class="action-icon">
								<i data-lucide="arrow-right-left"></i>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="action-card" style="cursor: pointer;" data-bs-toggle="modal"
						data-bs-target="#updatePasswordModal">
						<div class="action-content">
							<h6>{{ __('Password') }}</h6>
							<p>{{ __('Update') }}</p>
						</div>
						<div class="action-icon">
							<i data-lucide="asterisk"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="{{ route('funds.funddeposit') }}" class="action-button deposit text-decoration-none">
						<div class="btn-content">
							<h6>{{ __('Deposit') }}</h6>
							<p>{{ __('Fund your account') }}</p>
						</div>
						<div class="btn-icon">
							<i data-lucide="wallet"></i>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="{{ route('funds.fundwithdrawal') }}" class="action-button withdraw text-decoration-none">
						<div class="btn-content">
							<h6>{{ __('Withdraw') }}</h6>
							<p>{{ __('Transfer your profits') }}</p>
						</div>
						<div class="btn-icon">
							<i data-lucide="building-2"></i>
						</div>
					</a>
				</div>
			</div>

			{{-- Position Table --}}
			<div class="table-card mb-4">
				<div class="card-header">
					<h5>{{ __('Position') }}</h5>
				</div>
				<div class="table-controls">
					<div class="entries-select">
						<span>{{ __('Show') }}</span>
						<select>
							<option value="10">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
						<span>{{ __('entries') }}</span>
					</div>
					<div class="search-input">
						<span>{{ __('Search:') }}</span>
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="table-responsive">
					<table class="data-table">
						<thead>
							<tr>
								<th>{{ __('POSITION') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('SYMBOL') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('OPEN PRICE') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('CURRENT PRICE') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('ACTION') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('SL') }} <i data-lucide="arrow-up-down" style="width: 12px; height: 12px;"></i>
								</th>
								<th>{{ __('TP') }} <i data-lucide="arrow-up-down" style="width: 12px; height: 12px;"></i>
								</th>
								<th>{{ __('LOT(S)') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('PROFIT') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="9" class="empty-state">
									{{ __('No data available in table') }}
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-pagination">
					<div class="pagination-info">
						{{ __('Showing 0 to 0 of 0 entries') }}
					</div>
					<div class="pagination-buttons">
						<button type="button">{{ __('Previous') }}</button>
						<button type="button">{{ __('Next') }}</button>
					</div>
				</div>
			</div>

			{{-- Orders Table --}}
			<div class="table-card">
				<div class="card-header">
					<h5>{{ __('Orders') }}</h5>
				</div>
				<div class="table-controls">
					<div class="entries-select">
						<span>{{ __('Show') }}</span>
						<select>
							<option value="10">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
						<span>{{ __('entries') }}</span>
					</div>
					<div class="search-input">
						<span>{{ __('Search:') }}</span>
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="table-responsive">
					<table class="data-table">
						<thead>
							<tr>
								<th>{{ __('ORDER') }} <i data-lucide="arrow-up-down" style="width: 12px; height: 12px;"></i>
								</th>
								<th>{{ __('SYMBOL') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('PRICE') }} <i data-lucide="arrow-up-down" style="width: 12px; height: 12px;"></i>
								</th>
								<th>{{ __('PRICE POSITION') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('ACTION') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('VOLUME') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
								<th>{{ __('PROFIT') }} <i data-lucide="arrow-up-down"
										style="width: 12px; height: 12px;"></i></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="7" class="empty-state">
									{{ __('No data available in table') }}
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-pagination">
					<div class="pagination-info">
						{{ __('Showing 0 to 0 of 0 entries') }}
					</div>
					<div class="pagination-buttons">
						<button type="button">{{ __('Previous') }}</button>
						<button type="button">{{ __('Next') }}</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Update Password Modal --}}
	<div class="modal fade" id="updatePasswordModal" tabindex="-1" aria-labelledby="updatePasswordModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content password-modal">
				<div class="modal-header password-modal-header">
					<h5 class="modal-title" id="updatePasswordModalLabel">{{ __('Update Password') }}</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					{{-- MT5 Account Section --}}
					<div class="d-flex align-items-center justify-content-between mb-4">
						<div class="password-modal-label">{{ __('MT5 ACCOUNT') }}</div>
						<div class="password-modal-account">820690</div>
					</div>

					{{-- Description --}}
					<p class="password-modal-description">
						{{ __('You have the ability to update your Investor and Master passwords for your trading accounts here. If you require any assistance or encounter any challenges with password management, please don\'t hesitate to reach out to us for support.') }}
					</p>

					{{-- Password Type Selection --}}
					<div class="d-flex justify-content-between my-4">
						<div class="card">
							<div class="card-body">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="passwordType" id="masterPassword"
										value="master" checked>
									<label class="form-check-label" for="masterPassword">
										{{ __('Master Password') }}
									</label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="passwordType" id="investorPassword"
										value="investor">
									<label class="form-check-label" for="investorPassword">
										{{ __('Investor Password') }}
									</label>
								</div>
							</div>
						</div>
					</div>

					{{-- New Password --}}
					<div class="mb-3">
						<label class="mb-2">{{ __('New Password') }}</label>
						<div class="position-relative">
							<input type="password" class="form-control password-input" id="newPassword"
								placeholder="{{ __('Password') }}">
							<button type="button" class="password-toggle-btn" id="toggleNewPassword">
								<i data-lucide="eye-off" class="password-toggle-icon"></i>
							</button>
						</div>
					</div>

					{{-- Password Requirements --}}
					<div class="password-requirements mb-3">
						<div class="row g-2">
							<div class="col-6">
								<div class="requirement-item">
									<i data-lucide="check" class="requirement-icon"></i>
									<span>{{ __('Minimum 8 characters') }}</span>
								</div>
								<div class="requirement-item">
									<i data-lucide="check" class="requirement-icon"></i>
									<span>{{ __('At least 1 uppercase letter') }}</span>
								</div>
								<div class="requirement-item">
									<i data-lucide="check" class="requirement-icon"></i>
									<span>{{ __('At least 1 lowercase letter') }}</span>
								</div>
							</div>
							<div class="col-6">
								<div class="requirement-item">
									<i data-lucide="check" class="requirement-icon"></i>
									<span>{{ __('At least 1 special character') }}</span>
								</div>
								<div class="requirement-item">
									<i data-lucide="check" class="requirement-icon"></i>
									<span>{{ __('At least 1 digit') }}</span>
								</div>
							</div>
						</div>
					</div>

					{{-- Confirm Password --}}
					<div class="mb-4">
						<label class="mb-2">{{ __('Confirm Password') }}</label>
						<div class="position-relative">
							<input type="password" class="form-control password-input" id="confirmPassword"
								placeholder="{{ __('Password') }}">
							<button type="button" class="password-toggle-btn" id="toggleConfirmPassword">
								<i data-lucide="eye-off" class="password-toggle-icon"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">{{ __('Close') }}</button>
					<button type="button" class="btn btn-outline-primary">{{ __('Update Password') }}</button>
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

		// Password visibility toggle
		document.addEventListener('DOMContentLoaded', function () {
			const toggleNewPassword = document.getElementById('toggleNewPassword');
			const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
			const newPasswordInput = document.getElementById('newPassword');
			const confirmPasswordInput = document.getElementById('confirmPassword');

			if (toggleNewPassword && newPasswordInput) {
				toggleNewPassword.addEventListener('click', function () {
					const type = newPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
					newPasswordInput.setAttribute('type', type);

					const icon = toggleNewPassword.querySelector('i');
					if (type === 'password') {
						icon.setAttribute('data-lucide', 'eye-off');
					} else {
						icon.setAttribute('data-lucide', 'eye');
					}
					if (typeof lucide !== 'undefined') {
						lucide.createIcons();
					}
				});
			}

			if (toggleConfirmPassword && confirmPasswordInput) {
				toggleConfirmPassword.addEventListener('click', function () {
					const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
					confirmPasswordInput.setAttribute('type', type);

					const icon = toggleConfirmPassword.querySelector('i');
					if (type === 'password') {
						icon.setAttribute('data-lucide', 'eye-off');
					} else {
						icon.setAttribute('data-lucide', 'eye');
					}
					if (typeof lucide !== 'undefined') {
						lucide.createIcons();
					}
				});
			}

			// Re-initialize icons when modal is shown
			const updatePasswordModal = document.getElementById('updatePasswordModal');
			if (updatePasswordModal) {
				updatePasswordModal.addEventListener('shown.bs.modal', function () {
					if (typeof lucide !== 'undefined') {
						lucide.createIcons();
					}
				});
			}
		});
	</script>
@endpush