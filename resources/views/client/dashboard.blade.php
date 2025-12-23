@extends('layouts.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid pt-0">
            <!-- Row -->
            @include('client.layouts.recentalerts')
            <div class="row">
                <div class="col-xl-12">
                    @include('client.layouts.dashboardsummarycard')
                    {{-- @include('client.layouts.dashboardadslider') --}}
                    {{-- @include('components.dashboardslider') --}}
                    {{-- @include('components.promotionalslider') --}}
                    {{-- @include('client.layouts.dashboardmarketactivity') --}}

                    <div class="row mt-2">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header border-0 flex-wrap pb-0">
                                    <h4 class="card-title mb-2 mb-sm-0">My Trading Accounts</h4>
                                    <div class="d-flex gap-2 ms-auto flex-wrap">
                                        <a href="{{ route('broker.createLiveaccount') }}"
                                            class="btn btn-outline-primary rounded-pill">Open Live Account</a>
                                        <a href="{{ route('broker.createDemoaccount') }}"
                                            class="btn btn-outline-primary rounded-pill">Open Demo Account</a>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <ul class="nav nav-tabs" id="tradingAccountsTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="live-accounts-tab" data-bs-toggle="tab"
                                                data-bs-target="#live-accounts" type="button" role="tab"
                                                aria-controls="live-accounts" aria-selected="false">
                                                Live Accounts
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="demo-accounts-tab" data-bs-toggle="tab"
                                                data-bs-target="#demo-accounts" type="button" role="tab"
                                                aria-controls="demo-accounts" aria-selected="true">
                                                Demo Accounts
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="tab-content pt-4" id="tradingAccountsTabContent">
                                        <div class="tab-pane fade show active" id="live-accounts" role="tabpanel"
                                            aria-labelledby="live-accounts-tab">
                                            <div class="text-center py-5">
                                                <div class="mx-auto mb-3" style="width: 90px">
                                                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="14" y="10" width="36" height="44" rx="6"
                                                            fill="rgba(13,110,253,.08)" />
                                                        <path d="M24 22h16M24 30h16M24 38h10" stroke="rgba(13,110,253,.7)"
                                                            stroke-width="3" stroke-linecap="round" />
                                                        <path d="M40.5 43.5l6 6m0-6l-6 6" stroke="rgba(220,53,69,.8)"
                                                            stroke-width="3" stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <h5 class="mb-1">No Live Accounts Found</h5>
                                                <p class="text-muted mb-4">Create your first live trading account to start
                                                    trading.</p>
                                                <a href="{{ route('broker.createLiveaccount') }}?account=live"
                                                    class="btn btn-outline-primary rounded-pill px-5"
                                                    style="max-width: 560px; width: 100%;">
                                                    Create new Live Account
                                                </a>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="demo-accounts" role="tabpanel"
                                            aria-labelledby="demo-accounts-tab">
                                            <div class="text-center py-5">
                                                <div class="mx-auto mb-3" style="width: 90px">
                                                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="14" y="10" width="36" height="44" rx="6"
                                                            fill="rgba(13,110,253,.08)" />
                                                        <path d="M24 22h16M24 30h16M24 38h10" stroke="rgba(13,110,253,.7)"
                                                            stroke-width="3" stroke-linecap="round" />
                                                        <path d="M40.5 43.5l6 6m0-6l-6 6" stroke="rgba(220,53,69,.8)"
                                                            stroke-width="3" stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <h5 class="mb-1">No Demo Accounts Found</h5>
                                                <p class="text-muted mb-4">Create a demo account to practice without risk.
                                                </p>
                                                <a href="{{ route('broker.createDemoaccount') }}?account=demo"
                                                    class="btn btn-outline-primary rounded-pill px-5"
                                                    style="max-width: 560px; width: 100%;">
                                                    Create new Demo Account
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="row g-3">
                                <div class="col-12">
                                    <a href="{{ route('funds.funddeposit') }}" aria-label="Quick Deposit">
                                        <div class="card">
                                            <div class="card-body d-flex align-items-center justify-content-between">
                                                <h4 class="mb-0">Quick Deposit</h4>
                                                <div class="btn btn-light rounded" aria-label="Quick Deposit">
                                                    <i data-lucide="zap"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-12">
                                    <a href="{{ route('funds.fundwithdrawal') }}" aria-label="Quick Withdraw">
                                        <div class="card">
                                            <div class="card-body d-flex align-items-center justify-content-between">
                                                <h4 class="mb-0">Quick Withdraw</h4>
                                                <div class="btn btn-light rounded" aria-label="Quick Withdraw">
                                                    <i data-lucide="zap"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-12">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body d-flex align-items-center justify-content-between">
                                            <div>
                                                <h4 class="text-white mb-1">Introducing Broker</h4>
                                                <a href="{{ route('profile.edit') }}" class="text-white">View Profile</a>
                                            </div>
                                            <span class="badge badge-circle badge-light text-primary">
                                                <i data-lucide="badge-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--
                    <div class="col-lg-12">
                        <div class="card transaction-table">
                            <div class="card-header border-0 flex-wrap pb-0">
                                <div class="mb-2">
                                    <h4 class="card-title">Recent Transactions</h4>
                                    <p class="mb-sm-3 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                                <ul class="float-end nav nav-pills mb-2">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="Week-tab" data-bs-toggle="tab"
                                            data-bs-target="#Week" type="button" role="tab" aria-controls="month"
                                            aria-selected="true">Week</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="month-tab" data-bs-toggle="tab" data-bs-target="#month"
                                            type="button" role="tab" aria-controls="month"
                                            aria-selected="false">Month</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year-tab" data-bs-toggle="tab" data-bs-target="#year"
                                            type="button" role="tab" aria-controls="year"
                                            aria-selected="false">Year</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="Week" role="tabpanel"
                                        aria-labelledby="Week-tab">
                                        <div class="table-responsive">
                                            <table class="table table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>Transaction ID</th>
                                                        <th>Date</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Coin</th>
                                                        <th>Amount</th>
                                                        <th class="text-end">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/1.jpg" class=" me-2" width="30"
                                                                    alt=""> <span class="w-space-no">Dr.
                                                                    Jackson</span></div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td class="text-success font-w600">+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-success">COMPLETED</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow style-1 svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/2.jpg" class=" me-2" width="30"
                                                                    alt=""> <span class="w-space-no">Dr. Jackson</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td class="text-success font-w600">+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-warning">PENDING</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow style-2 svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/3.jpg" class="me-2" width="30"
                                                                    alt=""> <span class="w-space-no">Dr. Jackson</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td class="text-danger font-w600">+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-danger">CANCEL</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="month" role="tabpanel" aria-labelledby="month-tab">
                                        <div class="table-responsive">
                                            <table class="table table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>Transaction ID</th>
                                                        <th>Date</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Coin</th>
                                                        <th>Amount</th>
                                                        <th class="text-end">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow style-1 svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/2.jpg" class=" me-2" width="24"
                                                                    alt=""> <span class="w-space-no">Dr. Jackson</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td>+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-warning">PENDING</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/1.jpg" class=" me-2" width="24"
                                                                    alt=""> <span class="w-space-no">Dr. Jackson</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td>+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-success">COMPLETED</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow style-2 svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/3.jpg" class=" me-2" width="24"
                                                                    alt=""> <span class="w-space-no">Dr. Jackson</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td>+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-danger">CANCEL</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="year" role="tabpanel" aria-labelledby="year-tab">
                                        <div class="table-responsive">
                                            <table class="table table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>Transaction ID</th>
                                                        <th>Date</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Coin</th>
                                                        <th>Amount</th>
                                                        <th class="text-end">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/1.jpg" class=" me-2" width="24"
                                                                    alt=""> <span class="w-space-no">Dr. Jackson</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td>+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-success">COMPLETED</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow style-1 svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/2.jpg" class=" me-2" width="24"
                                                                    alt=""> <span class="w-space-no">Dr. Jackson</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td>+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-warning">PENDING</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <svg class="arrow style-2 svg-main-icon"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <rect fill="#fff" opacity="0.3"
                                                                        transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553) "
                                                                        x="10.6464466" y="5.85355339" width="2" height="14"
                                                                        rx="1" />
                                                                    <path
                                                                        d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z"
                                                                        fill="#fff" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </td>
                                                        <td>#12415346563475</td>
                                                        <td>01 August 2020</td>
                                                        <td>Thomas</td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/avatar/3.jpg" class=" me-2" width="24"
                                                                    alt=""> <span class="w-space-no">Dr. Jackson</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="images/svg/btc.svg" alt=""
                                                                    class="me-2 img-btc">Bitcoin</div>
                                                        </td>
                                                        <td>+$5,553</td>
                                                        <td class="text-end">
                                                            <div class="badge badge-sm badge-danger">CANCEL</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Apex Chart -->
    <script src="{{ URL::asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/chart-js/chart.bundle.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/dashboard/dashboard-1.js') }}"></script>
@endpush