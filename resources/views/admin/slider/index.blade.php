@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h5>Slider</h5>
            <a type="button" href="{{route('admin.slider.create')}}" class="btn btn-primary px-3 rounded-0"><i class='bx bx-plus'></i>Add New</a>
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th>S.N.</th>
                                <th>Slider Name</th>
                                <th>Image</th>
                                <th>Published Date</th>
                                <th>Published</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="align-middle">1</td>
                                <td class="align-middle">Final Profession of Fr Ajay Arun Minj, SJ</td>
                                <td class="align-middle"><img src="{{asset('public/assets/images/sliderAjayArunMinj.jpg')}}" alt="slider" class="img-fluid border p-1" width="200px"></td>
                                <td class="text-center align-middle">05-June-2024</td>
                                <td class="align-middle">
                                    <div class="form-check form-switch d-flex justify-content-center ">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault1" checked>
                                    </div>
                                </td>
                                <td class="text-center align-middle">1</td>
                                <td class="text-center align-middle">
                                    <button type="button" class="btn btn-outline-primary">View
                                    </button>
                                    <button type="button" class="btn btn-outline-dark">Edit
                                    </button>
                                    <button type="button" class="btn btn-outline-danger"><i class='bx bxs-trash-alt'></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
