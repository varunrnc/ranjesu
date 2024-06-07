@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h5>Permissions</h5>
            <button type="button" data-bs-toggle="modal" data-bs-target="#permissionModal"
                class="btn btn-primary px-3 rounded-0"><i class='bx bx-plus'></i>Permission</button>
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                <h6>PERMISSIONS LIST</h6>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Key</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->key }}</td>
                                    <td><button type="button" class="btn btn-outline-danger"><i
                                                class='bx bxs-trash-alt'></i>
                                        </button></td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Key</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- permission model  --}}
    <div class="modal fade" id="permissionModal" tabindex="-1" aria-labelledby="permissionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="permissionModalLabel">Add Permission</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.permission.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="col-md-12 my-3">
                            <label for="permissionName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="permission_name" id="permissionName"
                                placeholder="Enter Permission Name">
                            <input type="hidden" class="form-control" name="key" value="" required>

                            @error('permission_name')
                                <span class="invalid-name" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group">
                                @if (!$roles->isEmpty())
                                    <h5>{{ __('Assign Permission to Roles') }}</h5>
                                    @foreach ($roles as $role)
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="roles[]" class="custom-control-input"
                                                id='role{{ $role->id }}'>
                                            {{ Form::label('role' . $role->id, __(ucfirst($role->name)), ['class' => 'custom-control-label']) }}
                                        </div>
                                    @endforeach
                                @endif
                                @error('roles')
                                    <span class="invalid-roles" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

        $("input[name=permission_name]").on('keyup', function() {
            $("input[name=key]").val(unique_code($(this).val()));
        });

        function unique_code($string) {
            return $string.replace(/ /g, "_").toLowerCase();
        }
    </script>
@endsection
