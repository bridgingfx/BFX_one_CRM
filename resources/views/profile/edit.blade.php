@extends('layouts.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid pt-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card profile h-0">
                        <div class="card-body p-0">
                            <div class="photo-content">
                                <div class="cover-photo"></div>
                            </div>

                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{ URL::asset('assets/images/profile/profile.png') }}"
                                        class="img-fluid rounded-circle" alt="Profile" style="border: 5px solid #fff;" />
                                </div>
                                <div class="profile-details align-items-center">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{ $user->name ?? '' }}</h4>
                                        <p class="mb-0">{{ $user->email ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs profile-tab" id="profileTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="personal-tab" data-bs-toggle="tab"
                                        data-bs-target="#personal" type="button" role="tab" aria-controls="personal"
                                        aria-selected="true">
                                        <i data-lucide="user" class="me-2"></i> {{ __('Personal Details') }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="kyc-tab" data-bs-toggle="tab" data-bs-target="#kyc"
                                        type="button" role="tab" aria-controls="kyc" aria-selected="false">
                                        <i data-lucide="file-badge" class="me-2"></i> {{ __('KYC Verification') }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                                        data-bs-target="#password" type="button" role="tab" aria-controls="password"
                                        aria-selected="false">
                                        <i data-lucide="lock" class="me-2"></i> {{ __('Change Password') }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="wallet-tab" data-bs-toggle="tab" data-bs-target="#wallet"
                                        type="button" role="tab" aria-controls="wallet" aria-selected="false">
                                        <i data-lucide="wallet" class="me-2"></i> {{ __('Wallet Details') }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bank-tab" data-bs-toggle="tab" data-bs-target="#bank"
                                        type="button" role="tab" aria-controls="bank" aria-selected="false">
                                        <i data-lucide="building-2" class="me-2"></i> {{ __('Bank Details') }}
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content pt-4" id="profileTabContent">
                                <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                    aria-labelledby="personal-tab">
                                    <div class="card mb-0">
                                        <div class="card-header border-0">
                                            <h4 class="card-title mb-0">{{ __('Personal Information') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            @include('profile.partials.update-profile-information-form')
                                        </div>
                                    </div>

                                    <div class="card mt-4 mb-0">
                                        <div class="card-header border-0">
                                            <h4 class="card-title mb-0">{{ __('Danger Zone') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            @include('profile.partials.delete-user-form')
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="kyc" role="tabpanel" aria-labelledby="kyc-tab">
                                    <div class="card">
                                        <div class="card-header border-0 d-flex align-items-center justify-content-between">
                                            <h4 class="card-title mb-0">{{ __('KYC Verification') }}</h4>

                                            {{-- <button type="button" class="btn btn-outline-primary">
                                                <i data-lucide="upload" class="me-2"></i> {{ __('Upload Documents') }}
                                            </button> --}}

                                            <a href="{{ route('documentUpload') }}" class="btn btn-outline-primary">
                                                <i data-lucide="upload" class="me-2"></i> {{ __('Upload Documents') }}
                                            </a>
                                        </div>

                                        <div class="card-body">
                                            <div class="row g-4">
                                                {{-- ID Proof --}}
                                                <div class="col-lg-12">
                                                    <div class="border rounded-3 p-3">
                                                        <h5 class="mb-3">{{ __('ID Proof') }}</h5>

                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label">{{ __('Front Side') }}</label>
                                                                <div class="border rounded-3 d-flex align-items-center justify-content-center"
                                                                    style="height:120px; background:#fff;">
                                                                    <img src="{{ asset('assets/images/upload-placeholder.png') }}"
                                                                        alt="Upload"
                                                                        style="height:24px; width:24px; opacity:.6;">
                                                                </div>
                                                                <input type="file" class="form-control mt-2"
                                                                    name="kyc_id_front" />
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">{{ __('Back Side') }}</label>
                                                                <div class="border rounded-3 d-flex align-items-center justify-content-center"
                                                                    style="height:120px; background:#fff;">
                                                                    <img src="{{ asset('assets/images/upload-placeholder.png') }}"
                                                                        alt="Upload"
                                                                        style="height:24px; width:24px; opacity:.6;">
                                                                </div>
                                                                <input type="file" class="form-control mt-2"
                                                                    name="kyc_id_back" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Address Proof --}}
                                                <div class="col-lg-12">
                                                    <div class="border rounded-3 p-3">
                                                        <h5 class="mb-3">{{ __('Address Proof') }}</h5>

                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label">{{ __('Document') }}</label>
                                                                <div class="border rounded-3 d-flex align-items-center justify-content-center"
                                                                    style="height:120px; background:#fff;">
                                                                    <img src="{{ asset('assets/images/upload-placeholder.png') }}"
                                                                        alt="Upload"
                                                                        style="height:24px; width:24px; opacity:.6;">
                                                                </div>
                                                                <input type="file" class="form-control mt-2"
                                                                    name="kyc_address_proof" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Optional: status hint --}}
                                            <div class="alert alert-light border mt-4 mb-0">
                                                {{ __('Upload clear images. Supported: JPG/PNG/PDF.') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                    <div class="card mb-0">
                                        <div class="card-header border-0">
                                            <h4 class="card-title mb-0">{{ __('Change Password') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            @include('profile.partials.update-password-form')
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="wallet" role="tabpanel" aria-labelledby="wallet-tab">
                                    <div class="card">
                                        <div class="card-header border-0 d-flex align-items-center justify-content-between">
                                            <h4 class="card-title mb-0">{{ __('Wallet Details') }}</h4>

                                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#addWalletModal">
                                                <i data-lucide="plus" class="me-2"></i> {{ __('Add Wallet Information') }}
                                            </button>
                                        </div>

                                        <div class="card-body">
                                            {{-- Empty state (UI only) --}}
                                            <div class="text-center py-5">
                                                {{-- <img src="{{ asset('assets/images/empty-wallet.png') }}" alt="Empty"
                                                    style="max-width:150px;" onerror="this.style.display='none'"> --}}
                                                <i data-lucide="wallet" class="text-muted"
                                                    style="width:64px;height:64px;"></i>
                                                <div class="mt-3 fs-5 text-muted">{{ __('Please add your Wallet Details') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Modal --}}
                                    <div class="modal fade" id="addWalletModal" tabindex="-1"
                                        aria-labelledby="addWalletModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addWalletModalLabel">
                                                        {{ __('Add Wallet Details') }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="{{ __('Close') }}"></button>
                                                </div>

                                                {{-- UI only (when backend ready, set action/method and add @csrf) --}}
                                                <form>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('Wallet Name') }}</label>
                                                                <input type="text" class="form-control" name="wallet_name"
                                                                    placeholder="">
                                                            </div>

                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('Wallet Crypto') }}</label>
                                                                <select class="form-select" name="wallet_crypto">
                                                                    <option value="USDT" selected>USDT</option>
                                                                    <option value="BTC">BTC</option>
                                                                    <option value="ETH">ETH</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('Wallet Network') }}</label>
                                                                <select class="form-select" name="wallet_network">
                                                                    <option value="ERC20" selected>ERC20</option>
                                                                    <option value="TRC20">TRC20</option>
                                                                    <option value="BEP20">BEP20</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('Wallet Address') }}</label>
                                                                <input type="text" class="form-control"
                                                                    name="wallet_address" placeholder="">
                                                            </div>

                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('Status') }}</label>
                                                                <select class="form-select" name="status">
                                                                    <option value="1" selected>{{ __('Active') }}</option>
                                                                    <option value="0">{{ __('Inactive') }}</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-lg-12 mb-0">
                                                                <label
                                                                    class="form-label">{{ __('Verification OTP') }}</label>
                                                                <div class="input-group">
                                                                    <button class="btn btn-outline-secondary" type="button">
                                                                        {{ __('Send OTP') }}
                                                                    </button>
                                                                    <input type="text" class="form-control" name="otp"
                                                                        placeholder="">
                                                                    <span class="input-group-text">
                                                                        <i data-lucide="info"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-danger"
                                                            data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                                        <button type="button"
                                                            class="btn btn-outline-primary">{{ __('Add Wallet Details') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">
                                    <div class="card">
                                        <div class="card-header border-0 d-flex align-items-center justify-content-between">
                                            <h4 class="card-title mb-0">{{ __('Bank Details') }}</h4>

                                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#addBankModal">
                                                <i data-lucide="plus" class="me-2"></i> {{ __('Add Bank Details') }}
                                            </button>
                                        </div>

                                        <div class="card-body">
                                            {{-- Empty state (UI only) --}}
                                            <div class="text-center py-5">
                                                {{-- <img src="{{ asset('assets/images/empty-bank.png') }}" alt="Empty"
                                                    style="max-width:150px;" onerror="this.style.display='none'"> --}}
                                                <i data-lucide="building-2" class="text-muted"
                                                    style="width:64px;height:64px;"></i>
                                                <div class="mt-3 fs-5 text-muted">{{ __('Please add your Bank Details') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Modal --}}
                                    <div class="modal fade" id="addBankModal" tabindex="-1"
                                        aria-labelledby="addBankModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addBankModalLabel">
                                                        {{ __('Add Bank Details') }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="{{ __('Close') }}"></button>
                                                </div>

                                                {{-- UI only (when backend ready, set action/method and add @csrf) --}}
                                                <form>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-3">
                                                                <label
                                                                    class="form-label">{{ __('Account Holder Name') }}</label>
                                                                <input type="text" class="form-control"
                                                                    name="account_holder_name"
                                                                    placeholder="{{ __('Beneficiary Name') }}">
                                                            </div>

                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('Account Number') }}</label>
                                                                <input type="text" class="form-control"
                                                                    name="account_number"
                                                                    placeholder="{{ __('Account Number') }}">
                                                            </div>

                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('IFSC Code') }}</label>
                                                                <input type="text" class="form-control" name="ifsc_code"
                                                                    placeholder="{{ __('IFSC Code') }}">
                                                            </div>

                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('SWIFT Code') }}</label>
                                                                <input type="text" class="form-control" name="swift_code"
                                                                    placeholder="{{ __('SWIFT Code') }}">
                                                            </div>

                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label">{{ __('Bank Name') }}</label>
                                                                <input type="text" class="form-control" name="bank_name"
                                                                    placeholder="{{ __('Bank Name') }}">
                                                            </div>

                                                            <div class="col-lg-12 mb-0">
                                                                <label
                                                                    class="form-label">{{ __('Verification OTP') }}</label>
                                                                <div class="input-group">
                                                                    <button class="btn btn-outline-secondary" type="button">
                                                                        {{ __('Send OTP') }}
                                                                    </button>
                                                                    <input type="text" class="form-control" name="otp"
                                                                        placeholder="">
                                                                    <span class="input-group-text">
                                                                        <i data-lucide="info"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-danger"
                                                            data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                                        <button type="button"
                                                            class="btn btn-outline-primary">{{ __('Add Bank Details') }}</button>
                                                    </div>
                                                </form>
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