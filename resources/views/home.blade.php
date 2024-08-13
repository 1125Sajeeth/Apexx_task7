@extends('layouts.app')
@section('title','')
@section('main-content')

<div class="bg-primary text-white">primary</div>
<div class="bg-secondary text-white">secondary</div>
<div class="bg-warning text-white">warning</div>


@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
{{-- asset link end --}}
