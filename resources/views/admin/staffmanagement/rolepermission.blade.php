@extends('layouts.adminapp')

@section('content')
<div class="content-body" style="min-height: 640px;">
    <div class="container-fluid pt-0">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">USER GROUPS</h4>
                    </div>

                    <div class="row">
                        <!-- Left Column: Roles -->
                        <div class="col-sm-4">
                            <div class="nav flex-column nav-pills mb-3" id="v-pills-tab" role="tablist">

                                @foreach ($roles as $k => $role)
                                    @if($role) {{-- Safety check --}}
                                        @php $rolename = str_replace(' ', '-', $role->role_name); @endphp

                                        <button class="user-group nav-link text-start {{ $k == 0 ? 'active' : '' }}"
                                            id="{{ $rolename }}-tab"
                                            data-bs-toggle="pill"
                                            data-bs-target="#{{ $rolename }}"
                                            type="button"
                                            role="tab"
                                            aria-controls="{{ $rolename }}"
                                            data-id="{{ $role->role_id }}"
                                            data-tab="{{ $rolename }}">
                                            <i class="ri-shield-user-line me-1 align-middle d-inline-block"></i>
                                            {{ $role->role_name ?? 'N/A' }}
                                        </button>
                                    @endif
                                @endforeach

                            </div>
                        </div>

                        <!-- Right Column: Permissions -->
                        <div class="col-sm-8">
                            <div class="tab-content" id="v-pills-tabContent">

                                @foreach ($roles as $k => $role)
                                    @if($role)
                                        @php $rolename = str_replace(' ', '-', $role->role_name); @endphp
                                        <div class="tab-pane fade permissions-tab {{ $k == 0 ? 'active show' : '' }}"
                                            id="{{ $rolename }}"
                                            role="tabpanel"
                                            aria-labelledby="{{ $rolename }}-tab">
                                            <!-- AJAX Content Will Load Here -->
                                        </div>
                                    @endif
                                @endforeach

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
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<script>
$(document).ready(function() {

    // Load first role tab automatically
    $('.user-group:first').click();

    setTimeout(function() {
        $('.permission-menu-sub').trigger('change');
    }, 2000);

    // Click handler for roles
    $(document).on("click", ".user-group", function() {
        let id = $(this).data("id");
        let tab = $(this).data("tab");

        if (!id) return;

        $.ajax({
            url: "{{ route('pilot.permissionsList') }}",
            type: "GET",
            data: { id: id },
            success: function(response) {
                $('#' + tab).html(response);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                $('#' + tab).html('<div class="text-danger">Unable to load permissions.</div>');
            }
        });
    });

    // Main checkbox logic
    $(document).on('change', '.permission-menu-main', function() {
        let isChecked = $(this).is(':checked');
        let page = $(this).data('page');
        $('.permission-menu-sub[data-page="' + page + '"]').prop('checked', isChecked);
    });

    // Sub checkbox logic
    $(document).on('change', '.permission-menu-sub', function() {
        let page = $(this).data('page');
        let allChecked = true;
        let anyUnchecked = false;

        $('.permission-menu-sub[data-page="' + page + '"]').each(function() {
            if (!$(this).is(':checked')) {
                allChecked = false;
                anyUnchecked = true;
            }
        });

        if (allChecked) {
            $('.permission-menu-main[data-page="' + page + '"]').prop('checked', true).prop('indeterminate', false);
        } else if (anyUnchecked) {
            $('.permission-menu-main[data-page="' + page + '"]').prop('checked', true).prop('indeterminate', true);
        }
    });

});
</script>
@endpush
