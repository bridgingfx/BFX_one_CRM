@extends('layouts.adminapp')
@section('content')
    <div class="content-body" style="min-height: 640px;">
        <div class="container-fluid pt-0">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Role List</h4>
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#createRoleModal">
                                + Create Role
                            </button>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive" >
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Role Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roledata as $role)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $role->role_name }}</td>
                                                <td>{{ $role->role_desc ?? '—' }}</td>
                                                <td>
                                                    @if ($role->is_active)
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>{{ $role->created_at?->format('Y-m-d') }}</td>
                                                <td>{{ $role->updated_at?->format('Y-m-d') }}</td>
                                                <td>
                                                    <button class="btn btn-primary shadow btn-xs sharp"
                                                        data-bs-toggle="modal" data-bs-target="#editRoleModal"
                                                        data-role-id="{{ $role->role_id }}"
                                                        data-role-name="{{ $role->role_name }}"
                                                        data-role-desc="{{ $role->role_desc }}"
                                                        data-role-active="{{ $role->is_active }}">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Create Role Modal -->
        <div class="modal fade" id="createRoleModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('pilot.roles.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Role Name <span class="text-danger">*</span></label>
                                <input type="text" name="role_name" class="form-control" placeholder="Enter role name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role Description</label>
                                <textarea name="role_desc" class="form-control" rows="3" placeholder="Enter role description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Role Modal (Single Dynamic Modal) -->
        <div class="modal fade" id="editRoleModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form id="editRoleForm" method="POST">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Role Name <span class="text-danger">*</span></label>
                                <input type="text" name="role_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role Description</label>
                                <textarea name="role_desc" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

        <script>
            $(document).ready(function() {
               

                // Dynamic Edit Modal
                $('#editRoleModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var roleId = button.data('role-id'); // <-- get from the button
                    var modal = $(this)

                    // Use route() to generate the correct URL
                    var updateUrl = "{{ route('pilot.roles.update', ':id') }}";
                    updateUrl = updateUrl.replace(':id', roleId);



                    modal.find('form#editRoleForm').attr('action', updateUrl)
                    modal.find('input[name="role_name"]').val(button.data('role-name'))
                    modal.find('textarea[name="role_desc"]').val(button.data('role-desc'))
                    modal.find('select[name="is_active"]').val(button.data('role-active'))
                });
            });
			
        </script>
    @endpush
