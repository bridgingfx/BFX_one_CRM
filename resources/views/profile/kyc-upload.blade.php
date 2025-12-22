@extends('layouts.app')

@push('styles')
    <style>
        .kyc-steps .nav-link {
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 14px 16px;
            color: #111;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
        }

        .kyc-steps .nav-link.active {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        .kyc-steps .nav-link i {
            width: 18px;
            height: 18px;
        }
    </style>
@endpush

@section('content')
    <div class="content-body">
        <div class="container-fluid pt-0">
            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills kyc-steps gap-3 mb-4" id="kycWizard" role="tablist">
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link active" id="step-instructions-tab" data-bs-toggle="pill"
                                        data-bs-target="#step-instructions" type="button" role="tab">
                                        <i data-lucide="file-text"></i> {{ __('Instructions') }}
                                    </button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link" id="step-identity-tab" data-bs-toggle="pill"
                                        data-bs-target="#step-identity" type="button" role="tab">
                                        <i data-lucide="id-card"></i> {{ __('Proof of Identity') }}
                                    </button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link" id="step-address-tab" data-bs-toggle="pill"
                                        data-bs-target="#step-address" type="button" role="tab">
                                        <i data-lucide="map-pin"></i> {{ __('Proof of Address') }}
                                    </button>
                                </li>
                            </ul>

                            <form method="POST" action="{{ route('uploadDocument') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="tab-content">
                                    {{-- Step 1 --}}
                                    <div class="tab-pane fade show active" id="step-instructions" role="tabpanel">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                                                <i data-lucide="file-badge" class="text-primary"
                                                    style="width:180px;height:180px;"></i>
                                            </div>

                                            <div class="col-lg-7">
                                                <h2 class="mb-2">{{ __('Instructions to Upload Your Documents') }}</h2>
                                                <p class="text-muted mb-4">
                                                    {{ __('Your document security is important to us. All files uploaded through this portal are securely stored.') }}
                                                </p>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <div class="d-flex gap-2">
                                                            <i data-lucide="check" class="text-success"></i>
                                                            <div>{{ __('Acceptable formats: PDF, JPG, JPEG, PNG.') }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <div class="d-flex gap-2">
                                                            <i data-lucide="check" class="text-success"></i>
                                                            <div>{{ __('Must be a government-issued identity card.') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <div class="d-flex gap-2">
                                                            <i data-lucide="check" class="text-success"></i>
                                                            <div>{{ __('Each file size should not exceed 2 MB.') }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <div class="d-flex gap-2">
                                                            <i data-lucide="check" class="text-success"></i>
                                                            <div>{{ __('Document must be NON-EXPIRED.') }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="d-flex gap-2">
                                                            <i data-lucide="check" class="text-success"></i>
                                                            <div>{{ __('Documents must be clear and legible.') }}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-end mt-4">
                                                    <button type="button" class="btn btn-outline-primary"
                                                        id="btnNextToIdentity">
                                                        {{ __('Next') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Step 2 --}}
                                    <div class="tab-pane fade" id="step-identity" role="tabpanel">
                                        <h2 class="mb-2">{{ __('Upload Your Proof of Identity') }}</h2>
                                        <div class="text-danger mb-4" style="font-size:12px;">
                                            {{ __('BOTH FILES ARE MANDATORY. If your document includes both the front and back sides in a single file, please upload the same file in both fields.') }}
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <h5 class="mb-1">{{ __('Front Side') }}</h5>
                                                <div class="text-muted mb-2" style="font-size:12px;">
                                                    {{ __('Upload the front side of your ID') }}
                                                </div>
                                                <input type="file" class="form-control" name="image" required>
                                                <div class="text-muted mt-2" style="font-size:12px;">
                                                    {{ __('Maximum File Size Allowed: 2MB') }}
                                                </div>
                                                @error('image') <div class="text-danger small mt-1">{{ $message }}
                                                </div> @enderror
                                            </div>

                                            <div class="col-lg-6 mb-4">
                                                <h5 class="mb-1">{{ __('Back Side') }}</h5>
                                                <div class="text-muted mb-2" style="font-size:12px;">
                                                    {{ __('Upload the back side of your ID') }}
                                                </div>
                                                <input type="file" class="form-control" name="image1" required>
                                                <div class="text-muted mt-2" style="font-size:12px;">
                                                    {{ __('Maximum File Size Allowed: 2MB') }}
                                                </div>
                                                @error('image1') <div class="text-danger small mt-1">{{ $message }}
                                                </div> @enderror
                                            </div>
                                        </div>

                                        <div class="text-end">
                                            <button type="button" class="btn btn-outline-primary" id="btnNextToAddress">
                                                {{ __('Next') }}
                                            </button>
                                        </div>
                                    </div>

                                    {{-- Step 3 --}}
                                    <div class="tab-pane fade" id="step-address" role="tabpanel">
                                        <h2 class="mb-2">{{ __('Upload Your Proof of Address') }}</h2>
                                        <div class="text-danger mb-4" style="font-size:12px;">
                                            {{ __('Please upload a document to verify your Proof of Address.') }}
                                        </div>

                                        <h5 class="mb-1">{{ __('Attach any one of this documents') }}</h5>
                                        <div class="text-muted mb-2" style="font-size:12px;">
                                            {{ __('(Electricity Bill, Telephone Bill, Bank Statement)') }}
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-7 mb-4">
                                                <input type="file" class="form-control" name="image2" required>
                                                <div class="text-muted mt-2" style="font-size:12px;">
                                                    {{ __('Maximum File Size Allowed: 2MB') }}
                                                </div>
                                                @error('image2') <div class="text-danger small mt-1">
                                                    {{ $message }}
                                                </div> @enderror
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-outline-primary px-5">
                                                {{ __('Upload Documents') }}
                                            </button>

                                            @if (session('status') === 'kyc-uploaded')
                                                <div class="text-success mt-3">{{ __('Uploaded successfully.') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function goTo(tabId) {
                var el = document.querySelector(tabId);
                if (!el || typeof bootstrap === 'undefined') return;
                var tab = new bootstrap.Tab(el);
                tab.show();
            }

            document.getElementById('btnNextToIdentity')?.addEventListener('click', function () {
                goTo('#step-identity-tab');
            });

            document.getElementById('btnNextToAddress')?.addEventListener('click', function () {
                goTo('#step-address-tab');
            });
        });
    </script>
@endpush