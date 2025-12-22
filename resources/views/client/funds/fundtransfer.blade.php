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

		/* --- Ticket UI (transfer design, matches deposit/withdraw pages) --- */
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
				<div class="col-12">
					<div class="card dz-card" id="custom-tab">
						<div class="card-header border-0">
							<nav class="w-100">
								<div class="nav nav-pills pay-nav w-100" role="tablist">
									<a class="nav-link" href="{{ route('funds.funddeposit') }}">
										<i data-lucide="banknote-arrow-up"></i> {{ __('Deposit') }}
									</a>

									<a class="nav-link" href="{{ route('funds.fundwithdrawal') }}">
										<i data-lucide="banknote-arrow-down"></i> {{ __('Withdraw') }}
									</a>

									<a class="nav-link active" href="{{ route('funds.fundtransfer') }}">
										<i data-lucide="arrow-right-left"></i> {{ __('Internal Transfer') }}
									</a>
								</div>
							</nav>
						</div>

						<div class="card-body pt-0">
							<h6 class="text-uppercase fw-bold mb-3" style="font-size:12px;">
								{{ __('Process Internal Transfer') }}
							</h6>
							<hr>

							<div class="row g-4 mt-2">
								<div class="col-md-5">
									<div class="text-uppercase fw-bold mb-3" style="font-size:12px;">
										{{ __('Select From Account') }}
									</div>

									<div class="vstack gap-3">
										<input class="btn-check" type="radio" name="from_account" id="from_1" checked>
										<label class="card select-card p-3" for="from_1">
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
														{{ __('Transferable Balance') }}
													</div>
												</div>
											</div>
										</label>

										<input class="btn-check" type="radio" name="from_account" id="from_2">
										<label class="card select-card p-3" for="from_2">
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
														{{ __('Transferable Balance') }}
													</div>
												</div>
											</div>
										</label>
									</div>
								</div>

								<div class="col-md-2 d-flex align-items-center justify-content-center">
									<div class="rounded-circle bg-light border d-flex align-items-center justify-content-center"
										style="width:56px;height:56px;">
										<i data-lucide="arrow-right-left"></i>
									</div>
								</div>

								<div class="col-md-5">
									<div class="text-uppercase fw-bold mb-3 text-lg-end" style="font-size:12px;">
										{{ __('Select To Account') }}
									</div>

									<div class="vstack gap-3">
										<input class="btn-check" type="radio" name="to_account" id="to_1" checked>
										<label class="card select-card p-3" for="to_1">
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
														{{ __('Transferable Balance') }}
													</div>
												</div>
											</div>
										</label>

										<input class="btn-check" type="radio" name="to_account" id="to_2">
										<label class="card select-card p-3" for="to_2">
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
														{{ __('Transferable Balance') }}
													</div>
												</div>
											</div>
										</label>
									</div>
								</div>
							</div>

							<div class="row justify-content-end mt-4">
								<div class="col-lg-6 col-xl-5">
									<label class="form-label fw-bold mb-2 text-uppercase" style="font-size:11px;">
										{{ __('Enter Amount') }}
									</label>
									<div class="input-group mb-3">
										<span class="input-group-text">USD</span>
										<input type="text" class="form-control" placeholder="">
									</div>

									<button type="button"
										class="btn btn-outline-primary rounded-pill w-100 py-3 fw-semibold">
										<i data-lucide="wallet" class="me-2"></i> {{ __('Process Transfer') }}
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection