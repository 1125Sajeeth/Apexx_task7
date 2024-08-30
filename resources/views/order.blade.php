@extends('layouts.app')
@section('title','')
@section('main-content')

<div class="d-flex flex-column container">
    <p>Slider Management</p>
    <div class="d-flex justify-content-end align-items-end mb-4">
        <a href="{{ route('add_categories') }}" class="btn btn-dark">
            <i class="fas fa-plus me-2"></i>ADD NEW CATEGORIES</a>
    </div>
</div>
<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Categories Image</th>
                <th scope="col">Categories Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="align-middle">
                <td>1</td>
                <td><img src="{{ asset('/img/test14.webp') }}" alt="" class="rounded" style="width: 102px; height: 102px; box-shadow: 4px 4px 25px 0px #00000040;"></td>
                <td>slider button</td>
                <td><a href="{{ route('edit_categories') }}" class="btn btn-icon btn-link"><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href="#" class="btn btn-icon btn-link" onclick="showDeleteConfirm()"><i class="fas fa-trash"></i></a></td>
            </tr>
            <tr class="align-middle">
                <td>2</td>
                <td><img src="{{ asset('/img/test14.webp') }}" alt="" class="rounded" style="width: 102px; height: 102px; box-shadow: 4px 4px 25px 0px #00000040;"></td>
                <td>slider button</td>
                <td><a href="{{ route('edit_categories') }}" class="btn btn-icon btn-link"><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href=""><a href="#" class="btn btn-icon btn-link" onclick="showDeleteConfirm()"><i class="fas fa-trash"></i></a></td>
            </tr>
            <tr class="align-middle">
                <td>2</td>
                <td><img src="{{ asset('/img/test14.webp') }}" alt="" class="rounded" style="width: 102px; height: 102px; box-shadow: 4px 4px 25px 0px #00000040;"></td>
                <td>slider button</td>
                <td><a href="{{ route('edit_categories') }}" class="btn btn-icon btn-link"><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href=""><a href="#" class="btn btn-icon btn-link" onclick="showDeleteConfirm()"><i class="fas fa-trash"></i></a></td>
            </tr>
            <tr class="align-middle">
                <td>2</td>
                <td><img src="{{ asset('/img/test14.webp') }}" alt="" class="rounded" style="width: 102px; height: 102px; box-shadow: 4px 4px 25px 0px #00000040;"></td>
                <td>slider button</td>
                <td><a href="{{ route('edit_categories') }}" class="btn btn-icon btn-link"><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href=""><a href="#" class="btn btn-icon btn-link" onclick="showDeleteConfirm()"><i class="fas fa-trash"></i></a></td>
            </tr>
        </tbody>
    </table>

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

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/order.js') }}"></script>
@endsection