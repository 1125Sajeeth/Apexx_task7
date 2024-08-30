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
                                    <input type="text" class="form-control " placeholder="Category name">
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

{{-- demoText end --}}


@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/edit_categories.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/edit_categories.js') }}"></script>
@endsection
{{-- asset link end --}}