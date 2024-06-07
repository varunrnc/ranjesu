@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h5>Add Slider</h5>
        </div>
        <hr>
        <div class="card">
            <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="sliderName" class="form-label">Slider Name</label>
                                    <input type="text" class="form-control" name="slider_name" id="sliderName" value="{{old('slider_name')}}">
                                </div>
                                <div class="col-md-12">
                                    <label for="sliderOrder" class="form-label">Slider Order</label>
                                    <input type="number" min="1" class="form-control" name="slider_order"
                                        id="sliderOrder" value="{{old('slider_name')}}">
                                </div>
                                <div class="col-md-12">
                                    <label for="sliderDesktop" class="form-label">Slider for Desktop (1440x450)</label>
                                    <input type="file" class="form-control" name="slider_desktop" id="sliderDesktop"
                                        accept=".jpg, .png, .jpeg|image">
                                </div>
                                <div class="col-md-12">
                                    <label for="sliderMobile" class="form-label">Slider for Mobile (640x200)</label>
                                    <input type="file" class="form-control" name="slider_mobile" id="sliderMobile"
                                        accept=".jpg, .png, .jpeg|image">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center pt-5 p-3">
                                <img style="width: 300px;border: 1px solid; border-radius: 10px; max-height:200px;"
                                    id="imageViewDesktop" src="{{ asset('public/assets/images/placeholder.jpg') }}"
                                    alt="banner image">
                                <label for="imageViewDesktop" class="d-block"><strong>Slider for Desktop</strong></label>
                            </div>
                            <div class="text-center p-3">
                                <img style="width: 200px;background: #4db2f3;border: 1px solid; border-radius: 10px; max-height:200px;"
                                    id="imageViewMobile" src="{{ asset('public/assets/images/placeholder.jpg') }}"
                                    alt="banner image">
                                <label for="imageViewMobile" class="d-block"><strong>Slider for Mobile</strong></label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a type="button" href="{{route('admin.slider')}}" class="btn btn-outline-secondary px-3 rounded-0">Cancel</a>
                    <button type="submit" class="btn btn-outline-primary px-3 rounded-0">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('page-js')
    <script>
        $(document).ready(function() {
            $("#sliderDesktop").change(function() {
                var slider_desktop_tmp_path = URL.createObjectURL(this.files[0]);
                $('#imageViewDesktop').attr('src', slider_desktop_tmp_path);
            });

            $("#sliderMobile").change(function() {
                var slider_mobile_tmp_path = URL.createObjectURL(this.files[0]);
                $('#imageViewMobile').attr('src', slider_mobile_tmp_path);
            });
        });
    </script>
@endsection
