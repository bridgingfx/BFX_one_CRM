@extends('layouts.app')
@push('styles')
	<style>
		.pay-nav {
			background: #fff;
			border: 1px solid #eef0f4;
			border-radius: 14px;
			padding: 10px;
			gap: 10px;
		}

		.pay-nav .nav-link {
			border-radius: 12px;
			padding: 10px 18px;
			color: #0f172a;
			font-weight: 600;
			text-transform: uppercase;
			display: inline-flex;
			align-items: center;
			gap: 10px;
		}

		.pay-nav .nav-link i {
			width: 18px;
			height: 18px;
		}

		.pay-nav .nav-link.active {
			background: var(--primary);
			color: #fff;
		}

		/* --- Deposit Ticket UI (new design) --- */
		.section-title {
			display: flex;
			align-items: center;
			gap: 16px;
			justify-content: center;
			font-weight: 700;
			letter-spacing: .5px;
			color: #0f172a;
			margin: 28px 0 16px;
			text-transform: uppercase;
			font-size: 12px;
		}

		.section-title:before,
		.section-title:after {
			content: "";
			height: 1px;
			background: #e9edf3;
			flex: 1;
		}

		.icon-44 {
			width: 44px;
			height: 44px;
		}

		.select-card {
			border: 1px solid #e9edf3;
			border-radius: 12px;
			box-shadow: 0 6px 14px rgba(15, 23, 42, .06);
			transition: .15s ease;
		}

		.select-card:hover {
			border-color: #cfd8e3;
		}

		.btn-check:checked+.select-card {
			border-color: var(--primary);
			box-shadow: 0 0 0 3px rgba(55, 76, 152, .12);
		}

		.side-banner {
			border-radius: 14px;
			padding: 22px;
			color: #fff;
			background: radial-gradient(circle at 15% 10%, rgba(255, 255, 255, .18) 0 28%, transparent 29%),
				radial-gradient(circle at 80% 60%, rgba(255, 255, 255, .12) 0 30%, transparent 31%),
				linear-gradient(135deg, #1f4c7a, #0b2e57);
			min-height: 155px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 14px;
			overflow: hidden;
		}

		.side-banner h4 {
			margin: 0 0 6px;
			font-weight: 700;
		}

		.side-banner p {
			margin: 0;
			opacity: .9;
			font-size: 12px;
		}

		.side-banner .icon {
			width: 64px;
			height: 64px;
			border-radius: 18px;
			background: rgba(255, 255, 255, .14);
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.side-banner .icon i {
			width: 30px;
			height: 30px;
			color: #fff;
		}
	</style>
@endpush
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-9 col-xxl-8 col-sm-12">
					<div class="row">
						<div class="col-xl-12">
							<div class="card dz-card" id="custom-tab">
								<div class="card-header border-0">
									<nav class="w-100">
										<div class="nav nav-pills pay-nav w-100" role="tablist">
											<a class="nav-link active" href="{{ route('funds.funddeposit') }}">
												<i data-lucide="banknote-arrow-up"></i> {{ __('Deposit') }}
											</a>

											<a class="nav-link" href="{{ route('funds.fundwithdrawal') }}">
												<i data-lucide="banknote-arrow-down"></i> {{ __('Withdraw') }}
											</a>

											<a class="nav-link" href="{{ route('funds.fundtransfer') }}">
												<i data-lucide="arrow-right-left"></i> {{ __('Internal Transfer') }}
											</a>
										</div>
									</nav>
								</div>
								<div class="card-body pt-0">
									<h6 class="text-uppercase fw-bold mb-3" style="font-size:12px;">
										{{ __('Create Deposit Ticket') }}
									</h6>
									<hr>

									<div class="section-title">{{ __('Select MT5 Account') }}</div>

									<div class="row g-3">
										<div class="col-md-6">
											<input class="btn-check" type="radio" name="mt5_account" id="mt5_1" checked>
											<label class="card select-card p-3 h-100" for="mt5_1">
												<div class="d-flex justify-content-between align-items-sm-center gap-3">
													<div class="d-flex align-items-center gap-2">
														<div
															class="icon-44 rounded-circle bg-light border d-flex align-items-center justify-content-center flex-shrink-0">
															<i data-lucide="user" class="text-primary"></i>
														</div>
														<div class="fw-bold fs-5">820690</div>
													</div>
													<div class="ms-sm-auto text-end">
														<div class="fw-bold">$0.00</div>
														<div class="text-muted" style="font-size:11px;">
															{{ __('Current Balance') }}
														</div>
													</div>
												</div>
											</label>
										</div>

										<div class="col-md-6">
											<input class="btn-check" type="radio" name="mt5_account" id="mt5_2">
											<label class="card select-card p-3 h-100" for="mt5_2">
												<div class="d-flex justify-content-between align-items-sm-center gap-3">
													<div class="d-flex align-items-center gap-2">
														<div
															class="icon-44 rounded-circle bg-light border d-flex align-items-center justify-content-center flex-shrink-0">
															<i data-lucide="user" class="text-primary"></i>
														</div>
														<div class="fw-bold fs-5">473411</div>
													</div>
													<div class="ms-sm-auto text-end">
														<div class="fw-bold">$0.00</div>
														<div class="text-muted" style="font-size:11px;">
															{{ __('Current Balance') }}
														</div>
													</div>
												</div>
											</label>
										</div>
									</div>

									<div class="section-title">{{ __('Select Payment Method') }}</div>

									<div class="row g-3">
										<div class="col-md-6">
											<input class="btn-check" type="radio" name="payment_method" id="pm_1" checked>
											<label class="card select-card p-3 h-100" for="pm_1">
												<div class="d-flex align-items-center justify-content-between gap-3">
													<div>
														<div class="fw-bold text-uppercase" style="font-size:12px;">
															{{ __('Bank Transfer') }}
														</div>
														<div class="text-muted" style="font-size:11px;">
															{{ __('Pay using bank account') }}
														</div>
													</div>
													<div
														class="icon-44 rounded-circle bg-light border d-flex align-items-center justify-content-center flex-shrink-0">
														<i data-lucide="building-2" class="text-primary"></i>
													</div>
												</div>
											</label>
										</div>
										<div class="col-md-6">
											<input class="btn-check" type="radio" name="payment_method" id="pm_2">
											<label class="card select-card p-3 h-100" for="pm_2">
												<div class="d-flex align-items-center justify-content-between gap-3">
													<div>
														<div class="fw-bold text-uppercase" style="font-size:12px;">
															{{ __('Others') }}
														</div>
														<div class="text-muted" style="font-size:11px;">
															{{ __('Other payment options') }}
														</div>
													</div>
													<div
														class="icon-44 rounded-circle bg-light border d-flex align-items-center justify-content-center flex-shrink-0">
														<i data-lucide="credit-card" class="text-primary"></i>
													</div>
												</div>
											</label>
										</div>
									</div>

									<div class="section-title">{{ __('Deposit Details') }}</div>

									<form>
										<div class="row g-4">
											<div class="col-lg-12">
												<div class="row align-items-center g-3">
													<div class="col-lg-5">
														<label class="form-label text-uppercase fw-bold mb-1"
															style="font-size:11px;">
															{{ __('Deposit Currency') }} :
														</label>
														<div class="text-muted small">
															{{ __('Please select the currency you wish to use for the payment') }}
														</div>
													</div>
													<div class="col-lg-7">
														<select class="form-select">
															<option selected>INR</option>
															<option>USD</option>
														</select>
													</div>
												</div>
											</div>

											<div class="col-lg-12">
												<div class="row align-items-center g-3">
													<div class="col-lg-5">
														<label class="form-label text-uppercase fw-bold mb-1"
															style="font-size:11px;">
															{{ __('Enter Amount') }} :
														</label>
														<div class="text-muted small">
															{{ __('Please enter the amount to be deposited in selected currency') }}
														</div>
													</div>
													<div class="col-lg-7">
														<div class="input-group">
															<span class="input-group-text">INR</span>
															<input type="text" class="form-control"
																placeholder="Minimum $20">
														</div>
													</div>
												</div>
											</div>

											<div class="col-lg-12">
												<div class="row align-items-center g-3">
													<div class="col-lg-5">
														<label class="form-label text-uppercase fw-bold mb-1"
															style="font-size:11px;">
															{{ __('Amount In USD') }} :
														</label>
														<div class="text-muted small">{{ __('Deposit amount in USD') }}
														</div>
													</div>
													<div class="col-lg-7">
														<div class="input-group">
															<span class="input-group-text">USD</span>
															<input type="text" class="form-control" placeholder="">
														</div>
													</div>
												</div>
											</div>

											<div class="col-lg-12">
												<div class="row align-items-center g-3">
													<div class="col-lg-5">
														<label class="form-label text-uppercase fw-bold mb-1"
															style="font-size:11px;">
															{{ __('Deposit Proof') }} :
														</label>
														<div class="text-muted small">
															{{ __('Upload proof of your transaction') }}
														</div>
													</div>
													<div class="col-lg-7">
														<input type="file" class="form-control">
													</div>
												</div>
											</div>

											<div class="col-lg-12 pt-2">
												<button type="button"
													class="btn btn-outline-primary rounded-pill w-100 py-3 fw-semibold">
													{{ __('Deposit To Trade Account') }}
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-xxl-4 col-sm-12">
					<div class="row">
						<div class="col-12">
							<div class="side-banner">
								<div>
									<h4>{{ __('Fuel Your Trading Journey') }}</h4>
									<p>{{ __('Deposit now and unlock the gateway to global markets.') }}</p>
								</div>
								<div class="icon"><i data-lucide="wallet"></i></div>
							</div>
						</div>

						<div class="col-12 my-3">
							<div class="card">
								<div class="card-header">
									<h6 class="mb-0 text-uppercase">{{ __('MT5 Accounts Summary') }}</h6>
								</div>
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-start mb-3">
										<div class="d-flex gap-2 align-items-center">
											<i data-lucide="user" class="text-muted"></i>
											<div>
												<div class="fw-bold">820690</div>
												<div class="text-muted" style="font-size:11px;">ACCOUNT CATEGORY: ECN</div>
												<div class="text-muted" style="font-size:11px;">LEVERAGE: 500</div>
												<div class="text-muted" style="font-size:11px;">CREDIT: $0.00</div>
												<div class="text-muted" style="font-size:11px;">EQUITY: $0</div>
											</div>
										</div>
										<div class="text-end">
											<div class="fw-bold">$0.00</div>
											<div class="text-muted" style="font-size:11px;">Balance</div>
										</div>
									</div>

									<hr>

									<div class="d-flex justify-content-between align-items-start mb-2">
										<div class="d-flex gap-2 align-items-center">
											<i data-lucide="user" class="text-muted"></i>
											<div>
												<div class="fw-bold">473411</div>
												<div class="text-muted" style="font-size:11px;">ACCOUNT CATEGORY: ECN</div>
												<div class="text-muted" style="font-size:11px;">LEVERAGE: 200</div>
												<div class="text-muted" style="font-size:11px;">CREDIT: $0.00</div>
												<div class="text-muted" style="font-size:11px;">EQUITY: $0</div>
											</div>
										</div>
										<div class="text-end">
											<div class="fw-bold">$0.00</div>
											<div class="text-muted" style="font-size:11px;">Balance</div>
										</div>
									</div>

									<hr>

									<div class="d-flex justify-content-between py-1">
										<div class="text-muted" style="font-size:11px;">TOTAL CREDIT</div>
										<div class="fw-bold">$0.00</div>
									</div>
									<div class="d-flex justify-content-between py-1">
										<div class="text-muted" style="font-size:11px;">TOTAL EQUITY</div>
										<div class="fw-bold">$0.00</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<div class="card-body d-flex justify-content-between align-items-center">
									<div class="text-uppercase fw-bold">{{ __('Total Balance') }}</div>
									<div class="fw-bold">$0.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection