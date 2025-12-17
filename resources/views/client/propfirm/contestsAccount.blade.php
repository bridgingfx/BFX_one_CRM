@extends('layouts.app')
@push('style')
    <link href="{{ URL::asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="content-body">
        <div class="container-fluid pt-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card dz-card">
                        <div class="card-header flex-wrap border-0" id="default-tab">

                        </div>

                        <div class="tab-content mt-2" id="myTabContent3">
                            <div class="tab-pane fade show active" id="NavPills" role="tabpanel"
                                aria-labelledby="home-tab3">
                                <div class="card-body pt-0">
                                    <!-- Nav tabs -->
                                    <div class="default-tab">
                                        <ul class="nav nav-pills mb-4 light">
                                            <li class=" nav-item">
                                                <a href="#contests-0" class="nav-link active" data-bs-toggle="tab"
                                                    aria-expanded="false">Competitions List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#contests-1" class="nav-link" data-bs-toggle="tab"
                                                    aria-expanded="false">Upcoming</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#contests-2" class="nav-link" data-bs-toggle="tab"
                                                    aria-expanded="true">In Progress</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#contests-3" class="nav-link" data-bs-toggle="tab"
                                                    aria-expanded="true">Finished</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="contests-0" role="tabpanel">
                                                <div class="row ">
                                                    <div class="col-xl-3 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden pull-up">
                                                            <div class="text-center p-2 overlay-box"
                                                                style="background-image: url(assets/images/big/img5.jpg);">
                                                                <h4 class="mt-1 mb-0 text-white">Champion of the Month</h4>
                                                                <img src="assets/images/trophycon.png" width="100"
                                                                    class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <div class="card-body p-3">
                                                                <div class="row text-center">
                                                                    <div class="bootstrap-badge mb-2">
                                                                        <span class="badge light badge-warning">In
                                                                            Progress</span>
                                                                        <span class="badge light badge-success">Boost x150 (
                                                                            100K)</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center">
                                                                        <a class="btn btn-outline-primary btn-block mt-1 mb-3 px-5 sweet-success-cancel"
                                                                            href="javascript:void(0);">Join Now</a>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">02 Jan <br>2026</h4>
                                                                            <small>Start Date</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">10 Jan <br>2026</h4>
                                                                            <small>End Date</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card-footer p-2 d-flex align-items-center gap-2">

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-success btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="award"></i> Lead
                                                                </a>

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-warning btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="notepad-text-dashed"></i> Rules
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden pull-up">
                                                            <div class="text-center p-2 overlay-box"
                                                                style="background-image: url(assets/images/big/img5.jpg);">
                                                                <h4 class="mt-1 mb-0 text-white">Champion of the Month</h4>
                                                                <img src="assets/images/trophycon.png" width="100"
                                                                    class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <div class="card-body p-3">
                                                                <div class="row text-center">
                                                                    <div class="bootstrap-badge mb-2">
                                                                        <span
                                                                            class="badge light badge-danger">Finished</span>
                                                                        <span class="badge light badge-success">Boost x150 (
                                                                            100K)</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center">
                                                                        <a class="btn btn-outline-primary btn-block mt-1 mb-3 px-5 sweet-success-cancel"
                                                                            href="javascript:void(0);">Join Now</a>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">02 Jan <br>2026</h4>
                                                                            <small>Start Date</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">10 Jan <br>2026</h4>
                                                                            <small>End Date</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card-footer p-2 d-flex align-items-center gap-2">

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-success btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="award"></i> Lead
                                                                </a>

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-warning btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="notepad-text-dashed"></i> Rules
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contests-1">
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden pull-up">
                                                            <div class="text-center p-2 overlay-box"
                                                                style="background-image: url(assets/images/big/img5.jpg);">
                                                                <h4 class="mt-1 mb-0 text-white">Champion of the Month</h4>
                                                                <img src="assets/images/trophycon.png" width="100"
                                                                    class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <div class="card-body p-3">
                                                                <div class="row text-center">
                                                                    <div class="bootstrap-badge mb-2">
                                                                        <span class="badge light badge-warning">In
                                                                            Progress</span>
                                                                        <span class="badge light badge-success">Boost x150
                                                                            ( 100K)</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center">
                                                                        <a class="btn btn-outline-primary btn-block mt-1 mb-3 px-5 sweet-success-cancel"
                                                                            href="javascript:void(0);">Join Now</a>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">02 Jan <br>2026</h4>
                                                                            <small>Start Date</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">10 Jan <br>2026</h4>
                                                                            <small>End Date</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card-footer p-2 d-flex align-items-center gap-2">

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-success btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="award"></i> Lead
                                                                </a>

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-warning btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="notepad-text-dashed"></i> Rules
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden pull-up">
                                                            <div class="text-center p-2 overlay-box"
                                                                style="background-image: url(assets/images/big/img5.jpg);">
                                                                <h4 class="mt-1 mb-0 text-white">Champion of the Month</h4>
                                                                <img src="assets/images/trophycon.png" width="100"
                                                                    class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <div class="card-body p-3">
                                                                <div class="row text-center">
                                                                    <div class="bootstrap-badge mb-2">
                                                                        <span
                                                                            class="badge light badge-danger">Finished</span>
                                                                        <span class="badge light badge-success">Boost x150
                                                                            ( 100K)</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center">
                                                                        <a class="btn btn-outline-primary btn-block mt-1 mb-3 px-5 sweet-success-cancel"
                                                                            href="javascript:void(0);">Join Now</a>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">02 Jan <br>2026</h4>
                                                                            <small>Start Date</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">10 Jan <br>2026</h4>
                                                                            <small>End Date</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card-footer p-2 d-flex align-items-center gap-2">

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-success btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="award"></i> Lead
                                                                </a>

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-warning btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="notepad-text-dashed"></i> Rules
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contests-2">
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden pull-up">
                                                            <div class="text-center p-2 overlay-box"
                                                                style="background-image: url(assets/images/big/img5.jpg);">
                                                                <h4 class="mt-1 mb-0 text-white">Champion of the Month</h4>
                                                                <img src="assets/images/trophycon.png" width="100"
                                                                    class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <div class="card-body p-3">
                                                                <div class="row text-center">
                                                                    <div class="bootstrap-badge mb-2">
                                                                        <span class="badge light badge-warning">In
                                                                            Progress</span>
                                                                        <span class="badge light badge-success">Boost x150
                                                                            ( 100K)</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center">
                                                                        <a class="btn btn-outline-primary btn-block mt-1 mb-3 px-5 sweet-success-cancel"
                                                                            href="javascript:void(0);">Join Now</a>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">02 Jan <br>2026</h4>
                                                                            <small>Start Date</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">10 Jan <br>2026</h4>
                                                                            <small>End Date</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card-footer p-2 d-flex align-items-center gap-2">

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-success btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="award"></i> Lead
                                                                </a>

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-warning btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="notepad-text-dashed"></i> Rules
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden pull-up">
                                                            <div class="text-center p-2 overlay-box"
                                                                style="background-image: url(assets/images/big/img5.jpg);">
                                                                <h4 class="mt-1 mb-0 text-white">Champion of the Month</h4>
                                                                <img src="assets/images/trophycon.png" width="100"
                                                                    class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <div class="card-body p-3">
                                                                <div class="row text-center">
                                                                    <div class="bootstrap-badge mb-2">
                                                                        <span
                                                                            class="badge light badge-danger">Finished</span>
                                                                        <span class="badge light badge-success">Boost x150
                                                                            ( 100K)</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center">
                                                                        <a class="btn btn-outline-primary btn-block mt-1 mb-3 px-5 sweet-success-cancel"
                                                                            href="javascript:void(0);">Join Now</a>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">02 Jan <br>2026</h4>
                                                                            <small>Start Date</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">10 Jan <br>2026</h4>
                                                                            <small>End Date</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card-footer p-2 d-flex align-items-center gap-2">

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-success btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="award"></i> Lead
                                                                </a>

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-warning btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="notepad-text-dashed"></i> Rules
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contests-3">
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden pull-up">
                                                            <div class="text-center p-2 overlay-box"
                                                                style="background-image: url(assets/images/big/img5.jpg);">
                                                                <h4 class="mt-1 mb-0 text-white">Champion of the Month</h4>
                                                                <img src="assets/images/trophycon.png" width="100"
                                                                    class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <div class="card-body p-3">
                                                                <div class="row text-center">
                                                                    <div class="bootstrap-badge mb-2">
                                                                        <span class="badge light badge-warning">In
                                                                            Progress</span>
                                                                        <span class="badge light badge-success">Boost x150
                                                                            ( 100K)</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center">
                                                                        <a class="btn btn-outline-primary btn-block mt-1 mb-3 px-5 sweet-success-cancel"
                                                                            href="javascript:void(0);">Join Now</a>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">02 Jan <br>2026</h4>
                                                                            <small>Start Date</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">10 Jan <br>2026</h4>
                                                                            <small>End Date</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card-footer p-2 d-flex align-items-center gap-2">

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-success btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="award"></i> Lead
                                                                </a>

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-warning btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="notepad-text-dashed"></i> Rules
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden pull-up">
                                                            <div class="text-center p-2 overlay-box"
                                                                style="background-image: url(assets/images/big/img5.jpg);">
                                                                <h4 class="mt-1 mb-0 text-white">Champion of the Month</h4>
                                                                <img src="assets/images/trophycon.png" width="100"
                                                                    class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <div class="card-body p-3">
                                                                <div class="row text-center">
                                                                    <div class="bootstrap-badge mb-2">
                                                                        <span
                                                                            class="badge light badge-danger">Finished</span>
                                                                        <span class="badge light badge-success">Boost x150
                                                                            ( 100K)</span>
                                                                    </div>

                                                                    <div class="d-flex align-items-center">
                                                                        <a class="btn btn-outline-primary btn-block mt-1 mb-3 px-5 sweet-success-cancel"
                                                                            href="javascript:void(0);">Join Now</a>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">02 Jan <br>2026</h4>
                                                                            <small>Start Date</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-2">
                                                                            <h4 class="mb-0">10 Jan <br>2026</h4>
                                                                            <small>End Date</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card-footer p-2 d-flex align-items-center gap-2">

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-success btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="award"></i> Lead
                                                                </a>

                                                                <a href="{{ route('propfirm.challengesDetails') }}"
                                                                    class="btn btn-warning btn-sm light text-uppercase btn-block">
                                                                    <i data-lucide="notepad-text-dashed"></i> Rules
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
@endsection
@push('scripts')
    <script src="{{ URL::asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script>
        (function($) {
            "use strict"
            document.querySelector(".sweet-success").onclick = function() {
                Swal.fire("Hey, Good job !!", "You clicked the button !!", "success")
            }

            document.querySelector(".sweet-success-cancel").onclick = function() {
                Swal.fire({
                    title: "Are you sure you want to join this Contest?",
                    text: "You will not be able to recover this imaginary file !!",
                    icon: "info", // 🔵 Info icon added
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, Join Now !!",
                    cancelButtonText: "Not Now!!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire("Joined!", "You have successfully joined !!", "success");
                    } else {
                        Swal.fire("Cancelled", "You cancelled joining.", "error");
                    }
                });
            }
        })(jQuery);
    </script>
@endpush
