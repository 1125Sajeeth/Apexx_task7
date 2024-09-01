@extends('layouts.app')
@section('title','')
@section('main-content')

{{-- demoText start --}}

<div class="container mt-4">
    <h6 class="mb-4">Product Management > Edit Product</h6>
    <div class="justify-content-center d-flex">
        <div class="card border-0 p-5" style="width: 810px; box-shadow: 4px 4px 25px 0px #00000040;">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="Cinnamon">
                    </div>
                    <div class="mb-3">
                        <label for="modelNumber" class="form-label">Model Number</label>
                        <input type="text" class="form-control" id="modelNumber" value="XX123">
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
                        <label class="form-label">Availability</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="availability" id="inStock" checked>
                                <label class="form-check-label" for="inStock">In Stock</label>
                            </div>
                            <div class="form-check form-check-inline mx-auto">
                                <input class="form-check-input" type="radio" name="availability" id="outOfStock">
                                <label class="form-check-label" for="outOfStock">Out of Stock</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="productDetails" class="form-label">Product details</label>
                        <textarea class="form-control" id="productDetails" rows="3">hhhhhhhhhhhhhhhh</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="howToUse" class="form-label">How to use</label>
                        <textarea class="form-control" id="howToUse" rows="3">wwwwwwwww</textarea>
                    </div>
                    <div class="mb-5">
                        <label for="shippingDetails" class="form-label">Shipping details</label>
                        <textarea class="form-control" id="shippingDetails" rows="3">ggggggggggggg</textarea>
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
                                    <input type="text" class="form-control border-0 text-center" id="price" value="XXXXX">
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control border-0 text-center" id="weight" value="XXXXX">
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control border-0 text-center" id="qtyBox" value="XXXXX">
                                </div>
                            </div>
                            <hr class="my-2 border border-black">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control border-0 text-center" id="price2" value="XXXXX">
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control border-0 text-center" id="weight2" value="XXXXX">
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control border-0 text-center" id="qtyBox2" value="XXXXX">
                                </div>
                            </div>
                        </div>
                        <hr class="my-2 border border-black">
                    </div>
                    <div class="mb-3">
                        <button type="button" id="addInputsBtn" class="btn btn-dark w-100">+</button>
                    </div>
                    <div class="mb-3">
                        <div class="text-center">
                            <div class="text-center mb-2">
                                <label class="form-label"><i class="fas fa-pencil-alt"></i><span class="m-2">Edit image</span></label>
                            </div>
                            <div class="d-flex justify-content-center align-items-start gap-2">
                                <div class="upload-box position-relative d-flex justify-content-center align-items-center fs-3 bg-light big-box" id="bigBox">
                                    +
                                    <input type="file" accept="image/*" class="file-input" name="image">
                                    <button type="button" class="close-btn"><i class="fa-regular fa-trash-can"></i></button>
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <div class="upload-box position-relative d-flex justify-content-center align-items-center fs-3 bg-light mb-2 small-box" id="smallBox1">
                                        +
                                        <input type="file" accept="image/*" class="file-input">
                                        <button type="button" class="close-btn btn-small"><i class="fa-regular fa-trash-can"></i></button>
                                    </div>
                                    <div class="upload-box position-relative d-flex justify-content-center align-items-center fs-3 bg-light mb-2 small-box" id="smallBox2">
                                        +
                                        <input type="file" accept="image/*" class="file-input">
                                        <button type="button" class="close-btn btn-small"><i class="fa-regular fa-trash-can"></i></button>
                                    </div>
                                    <div class="upload-box position-relative d-flex justify-content-center align-items-center fs-3 bg-light small-box" id="smallBox3">
                                        +
                                        <input type="file" accept="image/*" class="file-input">
                                        <button type="button" class="close-btn btn-small"><i class="fa-regular fa-trash-can"></i></button>
                                    </div>
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


{{-- demoText end --}}


@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/edit_product.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/edit_product.js') }}"></script>
@endsection
{{-- asset link end --}}