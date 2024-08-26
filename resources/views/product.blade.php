@extends('layouts.app')
@section('title','')
@section('main-content')

{{-- demoText start --}}
<!-- <button class="btn btn-sm btn-link text-black"><i class="fa-solid fa-pencil"></i></i></button>
<button class="btn btn-sm btn-link text-black"><i class="fa-solid fa-trash"></i></i></button> -->

<div class="container mt-4">
        <h1>Product Management</h1>
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-success me-2">ADD NEW PRODUCT</button>
            <button class="btn btn-outline-secondary">Category Management</button>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Repeat this card structure for each product -->
            <div class="col">
                <div class="card product-card h-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{ asset('/img/test1.webp') }}" alt="Product" class="img-fluid me-3" style="width: 80px; height: 80px; object-fit: cover;">
                            <div>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">Battery</p>
                                <p class="card-text">Rs 10.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-end">
                        <button class="btn btn-sm btn-outline-secondary me-1">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of product card -->
        </div>

        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
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
