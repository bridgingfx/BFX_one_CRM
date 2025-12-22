<section>
    <div class="mb-3">
        <h5 class="mb-1">{{ __('Update Password') }}</h5>
        <p class="text-muted mb-0">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </div>

    @php
        $updatePasswordBag = $errors->updatePassword;
    @endphp

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-lg-4 mb-3">
                <label class="form-label" for="update_password_current_password">{{ __('Current Password') }}</label>
                <input id="update_password_current_password" name="current_password" type="password"
                    class="form-control {{ $updatePasswordBag->has('current_password') ? 'is-invalid' : '' }}"
                    autocomplete="current-password" />
                @if ($updatePasswordBag->has('current_password'))
                    <div class="invalid-feedback">{{ $updatePasswordBag->first('current_password') }}</div>
                @endif
            </div>

            <div class="col-lg-4 mb-3">
                <label class="form-label" for="update_password_password">{{ __('New Password') }}</label>
                <input id="update_password_password" name="password" type="password"
                    class="form-control {{ $updatePasswordBag->has('password') ? 'is-invalid' : '' }}"
                    autocomplete="new-password" />
                @if ($updatePasswordBag->has('password'))
                    <div class="invalid-feedback">{{ $updatePasswordBag->first('password') }}</div>
                @endif
            </div>

            <div class="col-lg-4 mb-3">
                <label class="form-label"
                    for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    class="form-control {{ $updatePasswordBag->has('password_confirmation') ? 'is-invalid' : '' }}"
                    autocomplete="new-password" />
                @if ($updatePasswordBag->has('password_confirmation'))
                    <div class="invalid-feedback">{{ $updatePasswordBag->first('password_confirmation') }}</div>
                @endif
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            @if (session('status') === 'password-updated')
                <span class="text-success">{{ __('Saved.') }}</span>
            @endif
        </div>
    </form>
</section>