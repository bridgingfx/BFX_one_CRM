@extends('layouts.app')
@push('styles')
	<style>
		.txn-tabs {
			border-bottom: 1px solid #eef0f4;
			gap: 22px;
		}

		.txn-tabs .nav-link {
			border: 0;
			border-radius: 0;
			padding: 10px 4px 14px;
			color: #0f172a;
			font-weight: 500;
		}

		.txn-tabs .nav-link.active {
			color: var(--primary);
			border-bottom: 2px solid var(--primary);
			background: transparent;
		}

		.empty-state {
			min-height: 250px;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			gap: 14px;
			padding: 26px 10px;
		}

		.empty-illustration {
			width: 86px;
			height: 86px;
			border-radius: 18px;
			background: #f8fafc;
			border: 1px solid #eef0f4;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.empty-illustration i {
			width: 38px;
			height: 38px;
			color: var(--primary);
			opacity: .9;
		}

		.txn-cta {
			max-width: 720px;
		}
	</style>
@endpush
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body p-0">
							<div class="d-flex align-items-center justify-content-between px-4 pt-4">
								<h4 class="mb-0">{{ __('All Transactions') }}</h4>

								<div class="dropdown">
									<button class="btn btn-light btn-sm" type="button" data-bs-toggle="dropdown"
										aria-expanded="false">
										<i data-lucide="more-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end">
										<li><a class="dropdown-item" href="#">{{ __('Today') }}</a></li>
										<li><a class="dropdown-item" href="#">{{ __('Weekly') }}</a></li>
										<li><a class="dropdown-item" href="#">{{ __('Monthly') }}</a></li>
									</ul>
								</div>
							</div>

							<ul class="nav nav-tabs txn-tabs px-4 mt-3" id="txnTabs" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="txn-deposits-tab" data-bs-toggle="tab"
										data-bs-target="#txn-deposits" type="button" role="tab" aria-controls="txn-deposits"
										aria-selected="true">
										{{ __('Deposits') }}
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="txn-withdrawals-tab" data-bs-toggle="tab"
										data-bs-target="#txn-withdrawals" type="button" role="tab"
										aria-controls="txn-withdrawals" aria-selected="false">
										{{ __('Withdrawals') }}
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="txn-transfers-tab" data-bs-toggle="tab"
										data-bs-target="#txn-transfers" type="button" role="tab"
										aria-controls="txn-transfers" aria-selected="false">
										{{ __('Internal Transfers') }}
									</button>
								</li>
							</ul>

							<div class="tab-content" id="txnTabsContent">
								{{-- Deposits --}}
								<div class="tab-pane fade show active" id="txn-deposits" role="tabpanel"
									aria-labelledby="txn-deposits-tab">
									<div class="empty-state">
										<div class="empty-illustration">
											<i data-lucide="clipboard-x"></i>
										</div>
										<div class="fs-5 text-muted">{{ __('No Deposit History found!') }}</div>
									</div>
									<div class="border-top px-4 py-4">
										<div class="mx-auto txn-cta">
											<a href="{{ route('funds.funddeposit') }}"
												class="btn btn-outline-primary rounded-pill w-100 py-3 fw-semibold">
												{{ __('Create new Transaction') }}
											</a>
										</div>
									</div>
								</div>

								{{-- Withdrawals --}}
								<div class="tab-pane fade" id="txn-withdrawals" role="tabpanel"
									aria-labelledby="txn-withdrawals-tab">
									<div class="empty-state">
										<div class="empty-illustration">
											<i data-lucide="clipboard-x"></i>
										</div>
										<div class="fs-5 text-muted">{{ __('No Withdrawal History found!') }}</div>
									</div>
									<div class="border-top px-4 py-4">
										<div class="mx-auto txn-cta">
											<a href="{{ route('funds.fundwithdrawal') }}"
												class="btn btn-outline-primary rounded-pill w-100 py-3 fw-semibold">
												{{ __('Create new Transaction') }}
											</a>
										</div>
									</div>
								</div>

								{{-- Internal Transfers --}}
								<div class="tab-pane fade" id="txn-transfers" role="tabpanel"
									aria-labelledby="txn-transfers-tab">
									<div class="empty-state">
										<div class="empty-illustration">
											<i data-lucide="clipboard-x"></i>
										</div>
										<div class="fs-5 text-muted">{{ __('No Internal Transfers Found!') }}</div>
									</div>
									<div class="border-top px-4 py-4">
										<div class="mx-auto txn-cta">
											<a href="{{ route('funds.fundtransfer') }}"
												class="btn btn-outline-primary rounded-pill w-100 py-3 fw-semibold">
												{{ __('Create new Transaction') }}
											</a>
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