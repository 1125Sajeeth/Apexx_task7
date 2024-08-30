@extends('layouts.app')
@section('title','')
@section('main-content')

{{-- demoText start --}}


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

<!-- alert -->

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