@extends('layouts.app')
@push('styles')
    <style>

    </style>
@endpush
@section('content')
    <div class="content-body">
        <div class="container-fluid pt-0">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card dz-card text-center">
                        <h1 class="card-title pt-3" style="font-size: 25px">Claim Your Bonus</h1>
                        <p class="card-text text-justify">
                            Bonuses are free gifts that are given to users when they sign up for an account.
                        </p>
                        <div class="container-fluid">
                            <div class="row">
                                {{-- Welcome Bonus --}}
                                <div class="col-xl-2 col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="card shadow pull-up">
                                        <div class="card-body bonus-grid-card">
                                            <div class="bonus-cards">
                                                <div class="bonus-img">
                                                    <img class="img-fluid" src="assets/images/resources/bonus-1.png"
                                                        alt="bonus">
                                                </div>
                                                <div class="new-arrival-content text-center mt-3">
                                                    <h4>Welcome Bonus</h4>
                                                    <div class="mt-3">

                                                        <div class="d-flex align-items-center gap-3">
                                                            <span class="badge light badge-primary">Code: END75</span>
                                                            <span class="badge light badge-success">Active</span>
                                                        </div>
                                                        <p class="card-text mt-3 text-start custom-height">
                                                            Welcome Bonus is a free gift that is given to new users, when
                                                            they
                                                            sign up for an account.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-sm-flex justify-content-between align-items-center mt-auto pt-3">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-outline-primary">Claim</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Deposite Bonus --}}
                                <div class="col-xl-2 col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="card shadow pull-up">
                                        <div class="card-body bonus-grid-card">
                                            <div class="bonus-cards">
                                                <div class="bonus-img">
                                                    <img class="img-fluid" src="assets/images/resources/bonus-2.png"
                                                        alt="bonus">
                                                </div>
                                                <div class="new-arrival-content text-center mt-3">
                                                    <h4>Deposit Bonus</h4>
                                                    <div class="mt-3">

                                                        <div class="d-flex align-items-center gap-3">
                                                            <span class="badge light badge-primary">Code: END75</span>
                                                            <span class="badge light badge-success">Active</span>
                                                        </div>
                                                        <p class="card-text mt-3 text-start custom-height">
                                                            Get extra trading credit when you fund your account. The Deposit
                                                            Bonus helps increase your margin, giving you more flexibility to
                                                            open and
                                                            manage trades efficiently.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-sm-flex justify-content-between align-items-center mt-auto pt-3">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-outline-primary">Claim</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Loyalty Bonus --}}
                                <div class="col-xl-2 col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="card shadow pull-up">
                                        <div class="card-body bonus-grid-card">
                                            <div class="bonus-cards">
                                                <div class="bonus-img">
                                                    <img class="img-fluid" src="assets/images/resources/bonus-3.png"
                                                        alt="bonus">
                                                </div>
                                                <div class="new-arrival-content text-center mt-3">
                                                    <h4>Loyalty Reward Bonus</h4>
                                                    <div class="mt-3">

                                                        <div class="d-flex align-items-center gap-3">
                                                            <span class="badge light badge-primary">Code: END75</span>
                                                            <span class="badge light badge-success">Active</span>
                                                        </div>
                                                        <p class="card-text mt-3 text-start custom-height">
                                                            Earn rewards for staying active. Our Loyalty Bonus is designed
                                                            for
                                                            consistent traders, offering exclusive benefits based on trading
                                                            volume and
                                                            account activity.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-sm-flex justify-content-between align-items-center mt-auto pt-3">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-outline-primary">Claim</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Referral Bonus --}}
                                <div class="col-xl-2 col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="card shadow pull-up">
                                        <div class="card-body bonus-grid-card">
                                            <div class="bonus-cards">
                                                <div class="bonus-img">
                                                    <img class="img-fluid" src="assets/images/resources/bonus-4.png"
                                                        alt="bonus">
                                                </div>
                                                <div class="new-arrival-content text-center mt-3">
                                                    <h4>Referral Bonus</h4>
                                                    <div class="mt-3">

                                                        <div class="d-flex align-items-center gap-3">
                                                            <span class="badge light badge-primary">Code: END75</span>
                                                            <span class="badge light badge-success">Active</span>
                                                        </div>
                                                        <p class="card-text mt-3 text-start custom-height">
                                                            Invite partners or clients to the platform and earn rewards. The
                                                            Referral
                                                            Bonus is credited when your referral registers and starts
                                                            trading through
                                                            the CRM.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-sm-flex justify-content-between align-items-center mt-auto pt-3">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-outline-primary">Invite</a>
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
@endpush
