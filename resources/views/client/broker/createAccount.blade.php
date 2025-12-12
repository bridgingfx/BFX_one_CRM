@extends('layouts.app')
@push('styles')
    <style>
        .recommended-badge {
            position: absolute;
            top: -28px;
            /* how high above the card */
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }
    </style>
    <link href="{{ URL::asset('assets/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ URL::asset('assets/vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="content-body">
        <div class="container-fluid pt-0">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card dz-card text-center">
                        <div class="card-body">
                            <span class="badge light badge-rounded badge-success mb-3" style="font-size: larger">
                                <i data-lucide="shield-ellipsis" class="me-1"></i>
                                Open New Trading Account
                            </span> <br>
                            <h1 class="card-title" style="font-size: 25px">Start Your Trading Journey</h1>
                            <p class="card-text text-justify">
                                Choose the perfect account type for your trading style and start trading with confidence
                            </p>
                            <div id="smartwizard" class="form-wizard order-create rounded border-0">
                                <ul class="nav nav-wizard" style="box-shadow: none!important">
                                    <li>
                                        <a class="nav-link" href="#account_format">
                                            <span class="d-flex align-items-center justify-content-center">
                                                <i data-lucide="user-star"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#account_type">
                                            <span class="d-flex align-items-center justify-content-center">
                                                <i data-lucide="hand-coins"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#account_config">
                                            <span class="d-flex align-items-center justify-content-center">
                                                <i data-lucide="settings"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#account_summary">
                                            <span class="d-flex align-items-center justify-content-center">
                                                <i data-lucide="fingerprint-pattern"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="account_format" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <h3 class="card-title pt-3">Choose Your Account Format</h3>
                                            <p class="card-text">Select the account type that best fits your trading needs
                                            </p>
                                            <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
                                                <div class="">
                                                    <div class="card pull-up pull-hover step-card p-3  border"
                                                        data-value="Standard">
                                                        <div class="text-center mb-3">
                                                            <span class="badge light badge-rounded-full badge-primary">

                                                                <i class="material-symbols-outlined fs-2">
                                                                    account_box
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <h5>Live Account</h5>
                                                        <p>No commission, fixed spreads</p>
                                                        <ul class="list-icons text-start px-lg-5 px-0">
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span> No
                                                                    commission trading</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Fixed
                                                                    spreads</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>24/7
                                                                    support</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Educational
                                                                    resources</a></li>
                                                        </ul>
                                                        <hr />
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="card pull-up pull-hover step-card p-3  border"
                                                        data-value="Standard">
                                                        <div class="text-center mb-3">
                                                            <span class="badge light badge-rounded-full badge-primary">

                                                                <i class="material-symbols-outlined fs-2">
                                                                    demography
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <h5>Demo Account</h5>
                                                        <p>No commission, fixed spreads</p>
                                                        <ul class="list-icons text-start px-lg-5 px-0">
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span> No
                                                                    commission trading</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Fixed
                                                                    spreads</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>24/7
                                                                    support</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Educational
                                                                    resources</a></li>
                                                        </ul>
                                                        <hr />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="account_type" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <h4 class="card-title">Choose Your Account Type</h4>
                                            <p class="card-text">Select the account type that best fits your trading needs
                                            </p>
                                            <div class="row d-flex justify-content-center align-items-center mt-3">
                                                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 mb-2">
                                                    <div style="min-height: 315px;"
                                                        class="card pull-up pull-hover step-card p-3 border"
                                                        data-value="Standard">
                                                        <div class="text-center mb-3">
                                                            <span class="badge light badge-rounded badge-primary w-25 ">

                                                                <i class="material-symbols-outlined fs-2">
                                                                    gamepad_circle_left
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <h5>Standard</h5>
                                                        <p>Perfect for beginners and casual traders</p>
                                                        <ul class="list-icons text-start px-lg-4">
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>No
                                                                    commission trading</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Fixed
                                                                    spreads</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>24/7
                                                                    support</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Educational
                                                                    resources</a></li>
                                                        </ul>
                                                        <hr />
                                                        <ul class="list-icons">
                                                            <li>Spread from: 1.5 pips</li>
                                                            <li>Min Deposit: $100</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-md-6 col-lg-3 col-xl-3 col-sm-12 mb-4 position-relative mt-4">


                                                    <div style="min-height: 315px;"
                                                        class="card pull-up pull-hover step-card p-3 border"
                                                        data-value="Standard">
                                                        <!-- Overlapping Badge -->
                                                        <div
                                                            class="recommended-badge badge rounded-pill gradient_one px-3 py-2 d-inline-flex align-items-center">
                                                            <i data-lucide="crown" class="me-1"></i>
                                                            <span class="fw-bold">RECOMMENDED</span>
                                                        </div>

                                                        <div class="text-center mb-3">
                                                            <span class="badge light badge-rounded badge-primary w-25 ">
                                                                <i class="material-symbols-outlined fs-2"> trending_up </i>
                                                            </span>
                                                        </div>

                                                        <h5>ECN</h5>
                                                        <p>Direct market access with tight spreads</p>

                                                        <ul class="list-icons text-start px-lg-4">
                                                            <li><span class="align-middle me-2"><i
                                                                        class="fa fa-check text-info"></i></span>Raw
                                                                spreads from 0.1 pips</li>
                                                            <li><span class="align-middle me-2"><i
                                                                        class="fa fa-check text-info"></i></span>Direct
                                                                market access</li>
                                                            <li><span class="align-middle me-2"><i
                                                                        class="fa fa-check text-info"></i></span>No dealing
                                                                desk</li>
                                                            <li><span class="align-middle me-2"><i
                                                                        class="fa fa-check text-info"></i></span>Advanced
                                                                trading tools</li>
                                                        </ul>

                                                        <hr />

                                                        <ul class="list-icons">
                                                            <li>Spread from: 1.5 pips</li>
                                                            <li>Min Deposit: $100</li>
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 mb-2">
                                                    <div style="min-height: 315px;"
                                                        class="card pull-up pull-hover step-card p-3 border"
                                                        data-value="Standard">
                                                        <div class="text-center mb-3">
                                                            <span class="badge light badge-rounded badge-primary w-25 ">

                                                                <i class="material-symbols-outlined fs-2">
                                                                    crown
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <h5>Pro</h5>
                                                        <p>For professional traders and institutions</p>
                                                        <ul class="list-icons text-start px-lg-4">
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Zero
                                                                    spread trading</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Premium
                                                                    execution</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Dedicated
                                                                    support</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Advanced
                                                                    analytics</a></li>
                                                        </ul>
                                                        <hr />
                                                        <ul class="list-icons">
                                                            <li>Spread from: 1.5 pips</li>
                                                            <li>Min Deposit: $100</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 mb-2">
                                                    <div style="min-height: 315px;"
                                                        class="card pull-up pull-hover step-card p-3 border"
                                                        data-value="Standard">
                                                        <div class="text-center mb-3">
                                                            <span class="badge light badge-rounded badge-primary w-25 ">

                                                                <i class="material-symbols-outlined fs-2">
                                                                    diamond
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <h5>Premium</h5>
                                                        <p>Zero spread + rebates</p>
                                                        <ul class="list-icons text-start px-lg-4">
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Zero
                                                                    spread + rebates</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>VIP
                                                                    support 24/7</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Exclusive
                                                                    market insights</a></li>
                                                            <li><a href="javascript:void(0)"><span
                                                                        class="align-middle me-2"><i
                                                                            class="fa fa-check text-info"></i></span>Personal
                                                                    account manager</a></li>
                                                        </ul>
                                                        <hr />
                                                        <ul class="list-icons">
                                                            <li>Spread from: 1.5 pips</li>
                                                            <li>Min Deposit: $100</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                {{-- <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 mb-2">
													<div style="min-height: 315px;" class="card pull-up pull-hover step-card p-3 border" data-value="Standard">
														<h5>Standard</h5>
														<p>No commission, fixed spreads</p>
														<ul class="list-icons text-start px-lg-4">
															<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span> Lorem ipsum dolor sit amet</a></li>
															<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span>Consectetur adipiscing elit</a></li>
															<li><a href="javascript:void(0)"><span class="align-middle me-2"><i class="fa fa-check text-info"></i></span>Integer molestie lorem at massa</a></li>
														</ul>
														<hr />
														<ul class="list-icons">
															<li>Spread from: 1.5 pips</li>
															<li>Min Deposit: $100</li>
														</ul>
													</div>
												</div> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div id="account_config" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <h4 class="card-title">Configure Your Account</h4>
                                            <p class="card-text">Set up your leverage and base currency preferences</p>

                                            <div class="col-md-6 col-sm-12 mb-2">
                                                <div class="card step-card p-3" data-value="Standard">
                                                    <h5>Leverage</h5>
                                                    <p>Choose your preferred leverage ratio</p>
                                                    <div class="alert alert-primary alert-dismissible fade show">
                                                        <svg viewBox="0 0 24 24" width="24" height="24"
                                                            stroke="currentColor" stroke-width="2" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="me-2 alert-icon">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="12" y1="16" x2="12"
                                                                y2="12"></line>
                                                            <line x1="12" y1="8" x2="12.01"
                                                                y2="8"></line>
                                                        </svg>
                                                        <strong>Leverage Info!</strong> Higher leverage increases both
                                                        potential profits and losses. Choose wisely based on your risk
                                                        tolerance.
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-4 col-12">
                                                            <div
                                                                class="alert alert-primary left-icon-big alert-dismissible fade show pull-up pull-hover">
                                                                <div class="media ">
                                                                    {{-- <div class="alert-left-icon-big">
                                                                        <span><i class="mdi mdi-email-alert"></i></span>
                                                                    </div> --}}
                                                                    <div class="media-body">
                                                                        <h6 class="mt-1 mb-2">1:100</h6>
                                                                        <p class="mb-0">Conservative</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-12">
                                                            <div
                                                                class="alert alert-primary left-icon-big alert-dismissible fade show pull-up pull-hover">
                                                                <div class="media">
                                                                    {{-- <div class="alert-left-icon-big">
                                                                        <span><i class="mdi mdi-email-alert"></i></span>
                                                                    </div> --}}
                                                                    <div class="media-body">
                                                                        <h6 class="mt-1 mb-2">1:200</h6>
                                                                        <p class="mb-0">Moderate</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-12">
                                                            <div
                                                                class="alert alert-primary left-icon-big alert-dismissible fade show pull-up pull-hover">
                                                                <div class="media">
                                                                    {{-- <div class="alert-left-icon-big">
                                                                        <span><i class="mdi mdi-email-alert"></i></span>
                                                                    </div> --}}
                                                                    <div class="media-body">
                                                                        <h6 class="mt-1 mb-2">1:300</h6>
                                                                        <p class="mb-0">Moderate</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-12">
                                                            <div
                                                                class="alert alert-primary left-icon-big alert-dismissible fade show pull-up pull-hover">
                                                                <div class="media">
                                                                    {{-- <div class="alert-left-icon-big">
                                                                        <span><i class="mdi mdi-email-alert"></i></span>
                                                                    </div> --}}
                                                                    <div class="media-body">
                                                                        <h6 class="mt-1 mb-2">1:400</h6>
                                                                        <p class="mb-0">Moderate</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-12">
                                                            <div
                                                                class="alert alert-primary left-icon-big alert-dismissible fade show pull-up pull-hover">
                                                                <div class="media">
                                                                    {{-- <div class="alert-left-icon-big">
                                                                        <span><i class="mdi mdi-email-alert"></i></span>
                                                                    </div> --}}
                                                                    <div class="media-body">
                                                                        <h6 class="mt-1 mb-2">1:400</h6>
                                                                        <p class="mb-0">Moderate</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 mb-2">
                                                <div class="card step-card p-3" data-value="Standard">
                                                    <h5>Base Currency</h5>
                                                    <p>Select your account's base currency</p>
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <div
                                                                class="alert alert-primary left-icon-big alert-dismissible fade show pull-up">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <span><i
                                                                                class="material-symbols-outlined">paid</i></span>
                                                                        <h6 class="mt-1 mb-2">USD</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div
                                                                class="alert alert-primary left-icon-big alert-dismissible fade show pull-up">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <span><i
                                                                                class="material-symbols-outlined">currency_rupee_circle</i></span>
                                                                        <h6 class="mt-1 mb-2">INR</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="account_summary" class="tab-pane" role="tabpanel">
                                        <div class="row align-items-center">
                                            <div class="py-3">
                                                <h4 class="card-title">Secure Your Account</h4>
                                                <p class="card-text">Set up your trading password and review your
                                                    selections
                                            </div>
                                            </p>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="card step-card p-3 border" data-value="Standard">
                                                    <div
                                                        class="card-header d-flex align-items-center gap-3 justify-content-center">
                                                        <div class="text-center mb-3">
                                                            <span class="badge light badge-rounded badge-primary">

                                                                <i class="material-symbols-outlined fs-2">
                                                                    admin_panel_settings
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <div class="text-start">
                                                            <h4 class="card-title">Trading Password</h4>
                                                            <p>Create a secure password for your account</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="basic-form">
                                                            <form class="text-start">
                                                                <div class="row">
                                                                    <div class="mb-3 col-12">
                                                                        <label class="form-label">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Jhon">
                                                                    </div>
                                                                    <div class="mb-4 position-relative  col-12">
                                                                        <label class="form-label">Password</label>
                                                                        <input type="password" id="password"
                                                                            class="form-control" placeholder="******">
                                                                        <span class="show-pass eye style-1">
                                                                            <i class="fa fa-eye-slash"></i>
                                                                            <i class="fa fa-eye"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="mb-4 position-relative  col-12">
                                                                        <label class="form-label">Confirm Password</label>
                                                                        <input type="password" id="confirm-password"
                                                                            class="form-control" placeholder="******">
                                                                        <span class="show-pass eye style-1">
                                                                            <i class="fa fa-eye-slash"></i>
                                                                            <i class="fa fa-eye"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox">
                                                                        <label class="form-check-label">
                                                                            I agree to the Terms of Service and
                                                                            Privacy Policy
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="card step-card p-3 border" data-value="Standard">
                                                    <div
                                                        class="card-header d-flex align-items-center gap-3 justify-content-center">
                                                        <div class="text-center mb-3">
                                                            <span class="badge light badge-rounded badge-primary">

                                                                <i class="material-symbols-outlined fs-2">
                                                                    verified
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <div class="text-start">
                                                            <h4 class="card-title">Account Summary</h4>
                                                            <p>Review your account configuration</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-start">
                                                        <div class="alert alert-primary alert-dismissible fade show">
                                                            <p>Account Type</p>
                                                            <strong>Premium</strong>
                                                        </div>
                                                        <div class="alert alert-primary alert-dismissible fade show">
                                                            <p>Leverage</p>
                                                            <strong>1:50</strong>
                                                        </div>
                                                        <div class="alert alert-primary alert-dismissible fade show">
                                                            <p>Base Currency</p>
                                                            <strong>USD</strong>
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
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ URL::asset('assets/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins-init/jquery.validate-init.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script> --}}

    <script>
        $(document).ready(function() {
            // Initialize SmartWizard
            $('#smartwizard').smartWizard();

            // Listen for step change
            $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection) {
                // If direction is backward
                if (stepDirection === "backward") {
                    // Remove "done" class from the current step and all steps after it
                    $('#smartwizard').find('.nav-link').each(function(index) {
                        if (index >= stepIndex) {
                            $(this).removeClass('done');
                        }
                    });
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('.pull-hover').forEach(card => {
            card.addEventListener('click', function() {
                // Remove active class from all cards
                document.querySelectorAll('.pull-hover').forEach(c => c.classList.remove('active'));

                // Add active class to the clicked one
                this.classList.add('active');
            });
        });
    </script>
@endpush
