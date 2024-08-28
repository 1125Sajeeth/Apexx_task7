@extends('layouts.app')
@section('title','')
@section('main-content')

{{-- demoText start --}}

<div class="container mt-4">
    <h6 class="mb-4">Product Management > Add Product</h6>
    <div class="justify-content-center d-flex">
        <div class="card border-0 p-5" style="width:  810px; height: 1,456px; box-shadow: 4px 4px 25px 0px #00000040;">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="modelNumber" class="form-label">Model Number</label>
                        <input type="text" class="form-control" id="modelNumber">
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="form-label">Categories</label>
                        <select class="form-select" id="categories">
                            <option selected>Select category</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothing</option>
                            <option value="home">Home & Garden</option>
                            <option value="books">Books</option>
                            <option value="toys">Toys & Games</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productDetails" class="form-label">Product details</label>
                        <textarea class="form-control" id="productDetails" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="howToUse" class="form-label">How to use</label>
                        <textarea class="form-control" id="howToUse" rows="3"></textarea>
                    </div>
                    <div class="mb-5">
                        <label for="shippingDetails" class="form-label">Shipping details</label>
                        <textarea class="form-control" id="shippingDetails" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-4 text-center">
                                <label for="price" class="form-label">Price</label>
                            </div>
                            <div class="col-4 text-center">
                                <label for="weight" class="form-label">Weight</label>
                            </div>
                            <div class="col-4 text-center">
                                <label for="qtyBox" class="form-label">QTY of a box</label>
                            </div>
                        </div>
                        <hr class="my-2 border border-black">
                        <div id="inputsContainer">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control border-0" id="price">
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control border-0" id="weight">
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control border-0" id="qtyBox">
                                </div>
                            </div>
                        </div>
                        <hr class="my-2 border border-black">
                    </div>
                    <div class="mb-3">
                        <button type="button" id="addInputsBtn" class="btn btn-dark w-100">+</button>
                    </div>
                    <div class="mb-3">
                        <div class="text-center mb-2">
                            <label class="form-label">Upload Image</label>
                        </div>
                        <div class="row">
                            <div class="col-9 mb-3">
                                <div id="uploadArea1" class="upload-area upload-area-lg d-flex align-items-center justify-content-center">
                                    <span class="fs-1">+</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="uploadArea2" class="upload-area upload-area-sm mb-2 d-flex align-items-center justify-content-center">
                                    <span class="fs-4">+</span>
                                </div>
                                <div id="uploadArea3" class="upload-area upload-area-sm mb-2 d-flex align-items-center justify-content-center">
                                    <span class="fs-4">+</span>
                                </div>
                                <div id="uploadArea4" class="upload-area upload-area-sm d-flex align-items-center justify-content-center">
                                    <span class="fs-4">+</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
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
            <div class="modal-body text-center">
                <p class="mb-0">Product successfully Added!</p>
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
<link rel="stylesheet" href="{{ asset('css/add_product.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/add_product.js') }}"></script>
@endsection
{{-- asset link end --}}