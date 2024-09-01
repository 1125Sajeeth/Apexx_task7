@extends('layouts.app')
@section('title','')
@section('main-content')

{{-- demoText start --}}

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-8">
            <div class="card border-0 rounded">
                <div class="card-body">
                    <p class="fw-normal mb-4">Slider Management > Add Slider</p>
                    <form>
                        <div class="mb-4">
                            <p class="mb-2">Upload Image</p>
                            <div class="upload-area" id="uploadArea">
                                <span class="text-muted fs-1">+</span>
                                <button type="button" class="close-btn "><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                            <input type="file" id="imageUpload" class="d-none" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="slider" class="form-label">Slider</label>
                            <input type="text" class="form-control" id="slider" placeholder="Slider Details">
                        </div>
                        <div class="mb-3">
                            <label for="buttonName" class="form-label">Button Name</label>
                            <input type="text" class="form-control" id="buttonName" placeholder="Button Name">
                        </div>
                        <div class="mb-4">
                            <label for="navLink" class="form-label">Nav Link</label>
                            <input type="text" class="form-control" id="navLink" placeholder="Link">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="customAlertModal" tabindex="-1" aria-labelledby="customAlertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 300px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customAlertModalLabel">Alert</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">successfully Added!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" style="width: 100px;">Ok</button>
            </div>
        </div>
    </div>
</div>

{{-- demoText end --}}


@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/add_slider.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/add_slider.js') }}"></script>
@endsection
{{-- asset link end --}}