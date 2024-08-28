@extends('layouts.app')
@section('title','')
@section('main-content')

{{-- demoText start --}}

<!-- <div class="container mt-4">
    <p>Product Management</p>
    <div class="d-flex flex-column align-items-end mb-5">
        <a href="{{ route('add_product') }}" class="btn btn-dark mb-2" style="width: 234px; height: 40px;">
            <i class="fas fa-plus me-2"></i>ADD NEW PRODUCT</a>
        <button class="btn btn-outline-dark" style="width: 234px; height: 40px;">Category Management</button>
    </div>

    <div class="row g-5">
        
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-1">
            <div class="product-card d-flex bg-white align-items-center rounded p-3 mb-3 position-relative" style="box-shadow: 4px 4px 25px 0px #00000040;">
                <img src="{{ asset('/img/test1.webp') }}" alt="Product" class="product-image" style="width: 84px; height: 84px;">
                <div class="product-info flex-grow-1 mx-4 mx-4">
                    <p class="product-title m-0">Lorem Ipsum</p>
                    <p class="product-category m-0">Battery</p>
                    <p class="product-price m-0">Rs 10.00</p>
                </div>
                <div class="action-buttons d-flex position-absolute top-0 end-0 p-4">
                        <button class="action-button pe-2 border-0 bg-transparent">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </a>
                    <button class="action-button border-0 bg-transparent"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-1">
            <div class="product-card d-flex bg-white align-items-center rounded p-3 mb-3 position-relative" style="box-shadow: 4px 4px 25px 0px #00000040;">
                <img src="{{ asset('/img/test1.webp') }}" alt="Product" class="product-image" style="width: 84px; height: 84px;">
                <div class="product-info flex-grow-1 mx-4 mx-4">
                    <p class="product-title m-0">Lorem Ipsum</p>
                    <p class="product-category m-0">Battery</p>
                    <p class="product-price m-0">Rs 10.00</p>
                </div>
                <div class="action-buttons d-flex position-absolute top-0 end-0 p-4">
                    <button class="action-button pe-2 border-0 bg-transparent"><i class="fas fa-pencil-alt"></i></button>
                    <button class="action-button border-0 bg-transparent"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-1">
            <div class="product-card d-flex bg-white align-items-center rounded p-3 mb-3 position-relative" style="box-shadow: 4px 4px 25px 0px #00000040;">
                <img src="{{ asset('/img/test1.webp') }}" alt="Product" class="product-image" style="width: 84px; height: 84px;">
                <div class="product-info flex-grow-1 mx-4">
                    <p class="product-title m-0">Lorem Ipsum</p>
                    <p class="product-category m-0">Battery</p>
                    <p class="product-price m-0">Rs 10.00</p>
                </div>
                <div class="action-buttons d-flex position-absolute top-0 end-0 p-4">
                    <button class="action-button pe-2 border-0 bg-transparent"><i class="fas fa-pencil-alt"></i></button>
                    <button class="action-button border-0 bg-transparent"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        
        
    </div>

    <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link border-0 p-2 bg-transparent" href="#" aria-label="Previous">
                    <span aria-hidden="true">&larr;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 me-1" href="#" style="box-shadow: 0px 2px 10px 0px #00000040;">1</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 me-1" href="#" style="box-shadow: 0px 2px 10px 0px #00000040;">2</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 p-2 bg-transparent" href="#" aria-label="Next">
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </li>
        </ul>
    </nav>
</div> -->


<div class="container mt-4">
    <p>Product Management</p>
    <div class="d-flex flex-column align-items-end mb-5">
        <a href="{{ route('add_product') }}" class="btn btn-dark mb-2" style="width: 234px; height: 40px;">
            <i class="fas fa-plus me-2"></i>ADD NEW PRODUCT</a>
        <button class="btn btn-outline-dark" style="width: 234px; height: 40px;">Category Management</button>
    </div>

    <div class="row gx-5" id="productContainer">
        <!-- Product cards will be dynamically inserted here -->
    </div>

    <nav aria-label="Product navigation">
        <ul class="pagination">

        </ul>
    </nav>
</div>

<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmModalLabel">Alert</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mb-0">Do you want to Delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark" id="confirmDelete">Confirm</button>
            </div>
        </div>
    </div>
</div>


{{-- demoText end --}}


@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/product.js') }}"></script>
@endsection
{{-- asset link end --}}