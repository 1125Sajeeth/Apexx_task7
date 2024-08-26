@extends('layouts.app')
@section('title','')
@section('main-content')

{{-- demoText start --}}
<!-- <button class="btn btn-sm btn-link text-black"><i class="fa-solid fa-pencil"></i></i></button>
<button class="btn btn-sm btn-link text-black"><i class="fa-solid fa-trash"></i></i></button> -->

<body>
    <div class="container my-4">
        <h2 class="mb-4">Product Management</h2>
        <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-dark">ADD NEW PRODUCT</button>
            <button class="btn btn-outline-dark">Category Management</button>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <!-- Product Card -->
            <div class="col">
                <div class="card h-100">
                    <img src="product-image.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Lorem Ipsum</h5>
                        <p class="card-text">Battery</p>
                        <p class="card-text">Rs 10.00</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-light"><i class="fa-solid fa-pencil"></i></button>
                        <button class="btn btn-light"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
            <!-- Repeat the above block for each product -->
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mt-4">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&laquo;</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
</body>


{{-- demoText end --}}


@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
{{-- asset link end --}}
