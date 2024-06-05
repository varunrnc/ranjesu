@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h5>Users</h5>
            <button type="button" class="btn btn-primary px-3 rounded-0"><i class='bx bx-plus'></i>Add New</button>
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%;">
                        <thead>
                            <tr class="text-center">
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Published Date</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>System Architect</td>
                                <td class="text-center">05-June-2024</td>
                                <td>
                                    <div class="form-check form-switch d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault1" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline-primary">View
                                    </button>
                                    <button type="button" class="btn btn-outline-dark">Edit
                                    </button>
                                    <button type="button" class="btn btn-outline-danger"><i class='bx bxs-trash-alt'></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Published Date</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-js')
<script>
    $(document).ready(function () {
			$('#example').DataTable();
		});
</script>
@endsection
