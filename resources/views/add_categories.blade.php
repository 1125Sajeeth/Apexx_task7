@extends('layouts.app')
@section('title','')
@section('main-content')

{{-- demoText start --}}

<div class="container mt-5">
    <div class="row justify-content-center">
        <p class="fw-normal">Product Management > Add Categories</p>
        <div class="col-md-8">
            <div class="card border-0 rounded" style="width: 870px; height: 302px; box-shadow: 4px 4px 25px 0px #00000040;">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Upload Image</p>
                                <div class="upload-area" id="uploadArea">
                                    <span class="text-muted fs-1 ">+</span>
                                    <button type="button" class="close-btn "><i class="fas fa-trash"></i></button>
                                </div>
                                <input type="file" id="imageUpload" class="d-none" accept="image/*">
                            </div>
                            <div class="col-md-6">
                                <p>Category Name</p>
                                <input type="text" class="form-control" placeholder="Category name">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-dark" style="width: 112px; height: 40px;">Save</button>
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
<link rel="stylesheet" href="{{ asset('css/add_categories.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/add_categories.js') }}"></script>
@endsection
{{-- asset link end --}}