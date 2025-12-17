@extends('layouts.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid pt-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card dz-card">
                        <div class="card-header flex-wrap border-1" id="default-tab">
                            <h4 class="card-title">Get Started in 3 Easy Steps: Quick and Hassle-Free!</h4>

                            <div class="d-flex flex-wrap">
                                <select class="default-select p2p-select width-200 mb-2" aria-label="Default" tabindex="0"
                                    name="status">
                                    <option value="All">All Platform</option>
                                    <option value="MT5">MT5</option>
                                </select>
                                <select class="default-select p2p-select width-200 mb-2" aria-label="Default" tabindex="0"
                                    name="status">
                                    <option value="All">All Period</option>
                                    <option value="Daily">Daily</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Yearly">Yearly</option>
                                </select>
                            </div>
                        </div>

                        <div class="tab-content mt-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="card-body pt-0">
                                    <!-- Nav tabs -->
                                    <div class="default-tab">
                                        <ul class="nav nav-tabs mt-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#challenge-0"><i
                                                        class="la la-home me-2"></i> Instant Challenge</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#challenge-1"><i
                                                        class="la la-user me-2"></i> Challenge 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#challenge-2"><i
                                                        class="la la-phone me-2"></i> Challenge 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#challenge-3"><i
                                                        class="la la-envelope me-2"></i> Challenge 3</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-5">
                                            <div class="tab-pane fade show active" id="challenge-0" role="tabpanel">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card shadow banking-card pull-up">
                                                            <div class="card-body">
                                                                <div class="row m-b-30">
                                                                    <div class="col-md-5 col-xxl-12">
                                                                        <div
                                                                            class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                                            <div class="new-arrivals-img-contnent">
                                                                                <img class="img-fluid"
                                                                                    src="assets/images/product/7.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7 col-xxl-12">
                                                                        <div class="new-arrival-content position-relative">
                                                                            <h4>Account 10k USD </h4>
                                                                            <div class="bootstrap-badge">
                                                                                <span class="badge light badge-danger">Price
                                                                                    $50</span>
                                                                                <span
                                                                                    class="badge light badge-success">Profit
                                                                                    Targets 8%</span>
                                                                                <span
                                                                                    class="badge light badge-secondary">Reward
                                                                                    Points 10%</span>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div
                                                                                    class="col-4 border-end border-top border-start border-bottom">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">4</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Max Daily Loss</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-top border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">3</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Min Trading Days
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-top border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">1:50</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Leverage</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-end border-start">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">8</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Max Overall Loss
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-4 border-bottom border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">Unlimted</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Trading Period
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-end ">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">90</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Profit Split</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="mt-3 mb-3 pt-0 d-flex align-items-center">
                                                                                <a href="{{ route('propfirm.buychallenges') }}"
                                                                                    class="btn btn-rounded btn-primary w-100">
                                                                                  <i data-lucide="credit-card"></i>  Purchase
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
                                            <div class="tab-pane fade" id="challenge-1">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card shadow banking-card pull-up">
                                                            <div class="card-body">
                                                                <div class="row m-b-30">
                                                                    <div class="col-md-5 col-xxl-12">
                                                                        <div
                                                                            class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
																			<h4>MT5-123456789</h4>
                                                                            <div class="new-arrivals-img-contnent">
                                                                                <img class="img-fluid"
                                                                                    src="assets/images/product/7.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7 col-xxl-12">
                                                                        <div class="new-arrival-content position-relative">
                                                                            <div class="bootstrap-badge">
                                                                                <span class="badge light badge-danger">Price
                                                                                    $50</span>
                                                                                <span
                                                                                    class="badge light badge-success">Profit
                                                                                    Targets 8%</span>
                                                                                <span
                                                                                    class="badge light badge-secondary">Reward
                                                                                    Points 10%</span>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div
                                                                                    class="col-4 border-end border-top border-start border-bottom">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">4</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Max Daily Loss</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-top border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">3</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Min Trading Days
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-top border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">1:50</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Leverage</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-end border-start">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">8</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Max Overall Loss
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-4 border-bottom border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">Unlimted</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Trading Period
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-end ">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">90</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Profit Split</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="mt-3 mb-3 pt-0 d-flex align-items-center">
                                                                                <a href="{{ route('propfirm.buychallenges') }}"
                                                                                    class="btn btn-rounded btn-primary w-100">
                                                                                  <i data-lucide="credit-card"></i>  Purchase
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
                                            <div class="tab-pane fade" id="challenge-2">
                                                <div class="row">
                                                   <div class="col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card shadow banking-card pull-up">
                                                            <div class="card-body">
                                                                <div class="row m-b-30">
                                                                    <div class="col-md-5 col-xxl-12">
                                                                        <div
                                                                            class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
																			<h4>MT5-123456789</h4>
                                                                            <div class="new-arrivals-img-contnent">
                                                                                <img class="img-fluid"
                                                                                    src="assets/images/product/7.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7 col-xxl-12">
                                                                        <div class="new-arrival-content position-relative">
                                                                            <div class="bootstrap-badge">
                                                                                <span class="badge light badge-danger">Price
                                                                                    $50</span>
                                                                                <span
                                                                                    class="badge light badge-success">Profit
                                                                                    Targets 8%</span>
                                                                                <span
                                                                                    class="badge light badge-secondary">Reward
                                                                                    Points 10%</span>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div
                                                                                    class="col-4 border-end border-top border-start border-bottom">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">4</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Max Daily Loss</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-top border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">3</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Min Trading Days
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-top border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">1:50</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Leverage</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-end border-start">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">8</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Max Overall Loss
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-4 border-bottom border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">Unlimted</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Trading Period
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-end ">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">90</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Profit Split</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="mt-3 mb-3 pt-0 d-flex align-items-center">
                                                                                <a href="{{ route('propfirm.buychallenges') }}"
                                                                                    class="btn btn-rounded btn-primary w-100">
                                                                                  <i data-lucide="credit-card"></i>  Purchase
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
                                            <div class="tab-pane fade" id="challenge-3">
                                                <div class="row">
                                                   <div class="col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card shadow banking-card pull-up">
                                                            <div class="card-body">
                                                                <div class="row m-b-30">
                                                                    <div class="col-md-5 col-xxl-12">
                                                                        <div
                                                                            class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
																			<h4>MT5-123456789</h4>
                                                                            <div class="new-arrivals-img-contnent">
                                                                                <img class="img-fluid"
                                                                                    src="assets/images/product/7.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7 col-xxl-12">
                                                                        <div class="new-arrival-content position-relative">
                                                                            <div class="bootstrap-badge">
                                                                                <span class="badge light badge-danger">Price
                                                                                    $50</span>
                                                                                <span
                                                                                    class="badge light badge-success">Profit
                                                                                    Targets 8%</span>
                                                                                <span
                                                                                    class="badge light badge-secondary">Reward
                                                                                    Points 10%</span>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div
                                                                                    class="col-4 border-end border-top border-start border-bottom">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">4</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Max Daily Loss</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-top border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">3</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Min Trading Days
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-top border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">1:50</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Leverage</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-end border-start">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">8</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Max Overall Loss
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-4 border-bottom border-end">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">Unlimted</span>
                                                                                        </h4>
                                                                                        <p class="m-0">Trading Period
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-4 border-bottom border-end ">
                                                                                    <div
                                                                                        class="pt-3 pb-3 ps-0 pe-0 text-center">
                                                                                        <h4 class="m-1"><span
                                                                                                class="counter">90</span> %
                                                                                        </h4>
                                                                                        <p class="m-0">Profit Split</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="mt-3 mb-3 pt-0 d-flex align-items-center">
                                                                                <a href="{{ route('propfirm.buychallenges') }}"
                                                                                    class="btn btn-rounded btn-primary w-100">
                                                                                  <i data-lucide="credit-card"></i>  Purchase
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
    <script src="{{ URL::asset('assets/vendor/chart-js/chart.bundle.min.js') }}"></script>
@endpush
