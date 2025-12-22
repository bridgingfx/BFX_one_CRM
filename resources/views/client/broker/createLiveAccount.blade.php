@extends('layouts.app')
@push('styles')
    <style>
        .setup-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .setup-form .form-label {
            font-weight: 600;
            color: #0f172a;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .setup-form .form-select {
            border-radius: 8px;
            border: 1px solid #e9edf3;
            padding: 12px 16px;
            font-size: 14px;
        }

        .setup-form .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(55, 76, 152, .1);
        }

        .create-account-btn {
            border-radius: 12px;
            padding: 14px 32px;
            font-weight: 600;
            font-size: 16px;
            border: 2px solid var(--primary);
            background: transparent;
            color: var(--primary);
            transition: all 0.2s ease;
        }

        .create-account-btn:hover {
            background: var(--primary);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(55, 76, 152, .2);
        }

        .create-account-btn i {
            width: 18px;
            height: 18px;
        }
    </style>
@endpush
@section('content')

    <div class="content-body">
        <div class="container-fluid pt-0">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="setup-form">
                                <h3 class="card-title mb-4 text-center fw-bold">{{ __('SET UP YOUR ACCOUNT') }}</h3>

                                <form>
                                    <div class="mb-4">
                                        <label class="form-label">{{ __('Choose Account Type') }}</label>
                                        <select class="form-select" name="account_type">
                                            <option value="LGFX-01" selected>LGFX-01 | Min $100.00 | Spread 35</option>
                                            <option value="LGFX-02">LGFX-02 | Min $500.00 | Spread 30</option>
                                            <option value="LGFX-03">LGFX-03 | Min $1000.00 | Spread 25</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">{{ __('Select Leverage') }}</label>
                                        <select class="form-select" name="leverage">
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500" selected>500</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">{{ __('IB Plan Name') }}</label>
                                        <select class="form-select" name="ib_plan">
                                            <option value="" selected>{{ __('No Plan Available') }}</option>
                                            <option value="plan1">Plan 1</option>
                                            <option value="plan2">Plan 2</option>
                                        </select>
                                    </div>

                                    <div class="text-center mt-5">
                                        <button type="submit" class="btn create-account-btn">
                                            <i data-lucide="plus" class="me-2"></i>
                                            {{ __('Create Account') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
    </script>
@endpush