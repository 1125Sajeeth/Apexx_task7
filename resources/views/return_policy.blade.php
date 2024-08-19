@extends('layouts.app')
@section('title','')
@section('main-content')


<!-- <h6 class="demoText__heading">return_policy</h6> -->
<div class="bg-image d-flex align-items-center">
    <div class="container m-5 position-relative justify-content-center text-center align-items-center z-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center justify-content-center">
                <h2 class="display-5  text-white fw-bold mb-0 fade-in-up border-top border-bottom border-white d-inline-block no-border-small">
                Return policy
                </h2>
            </div>
        </div>
    </div>

</div>
<!-- Policy -->
<div class="container mt-5 p-md-0 p-lg-0 p-4">

    <h3 class="fs-5 mt-5 fw-semibold">Hale Cinnamon Return Policy</h3>
    <p class="text-muted">Last Updated: <span class="fw-bold">22.06.2024</span></p>
    <p class="text-muted">Hale Cinnamon is committed to your satisfaction. If you are not completely satisfied with your purchase, you can return it to us for a full refund or exchange within 15 days of your purchase date.</p>
    <h3 class="fs-5 mt-4 fw-semibold">Conditions for Return</h3>
    <ul class="mb-4 text-muted">
        <li>Items must be returned in their original, unopened, and undamaged packaging.</li>
        <li>A copy of your original receipt or packing slip is required for all returns.</li>
        <li>We cannot accept returns for items that have been used or tampered with.</li>
        <li>We cannot accept returns for perishable items.</li>
    </ul>
    
    <h3 class="fs-5 mt-4 fw-semibold">How to Return an Item</h3>
    <ol class="mb-4 text-muted">
        <li>Contact our customer service team by email at <a href="mailto:youremail@example.com" class=" text-decoration-none" title="Mail">mail@cinnamon.com</a> or by phone at <a href="https://halecinnamon.com/tel:+94777538775" class=" text-decoration-none" title="Phone number">+94777538775</a> to request a return authorization (RA) number.</li>
        <li>Pack the item(s) you wish to return securely in the original packaging, if possible.</li>
        <li>Include a copy of your original receipt or packing slip in the package.</li>
        <li>Write the RA number clearly on the outside of the package.</li>
        <li>Ship the package to the following address:</li>
    </ol>
    <p class="mb-4"><span class="text-muted">Hale Cinnamon Returns</span><br><a href="https://www.google.com/maps/place/Your+Address+Here" class=" text-decoration-none">No 032, main street, Colombo, Sri Lanka.</a></p>
    
    <h3 class="fs-5 mt-4 fw-semibold">Return Shipping Costs</h3>
    <p class="text-muted mb-4">You are responsible for the cost of shipping the returned item(s) to us. We recommend using a trackable shipping service.</p>

    
    <h3 class="fs-5 mt-4 fw-semibold">Refunds</h3>
    <p class="text-muted mb-4">Once we receive your returned item(s) and verify that they meet the conditions for return, we will issue a full refund to the original payment method used for your purchase. Please allow [Number] business days for your refund to be processed.</p>

    <h3 class="fs-5 mt-4 fw-semibold">Exchanges</h3>
    <p class="text-muted mb-4">If you would like to exchange an item for a different size or flavor, please follow the return instructions above and indicate your desired exchange on the return form. We will ship the replacement item to you free of charge.</p>

    <h3 class="fs-5 mt-4 fw-semibold">Non-Returnable Items</h3>
    <ul class="mb-4 text-muted">
        <li>We cannot accept returns for perishable items.</li>
        <li>We cannot accept returns for items that have been used or tampered with.</li>
       
    </ul>
    
    <h3 class="fs-5 mt-4 fw-semibold">Contact Us</h3>
    <p class="text-muted mb-3">If you have any questions about our return policy, please contact us at:</p>
    <ul class="mb-4 text-muted">
        <li>Email: <a href="mailto:youremail@example.com" class=" text-decoration-none" title="Mail">info@halecinnamon.com</a></li>
        <li>Phone: <a href="https://halecinnamon.com/tel:+94777538775" class=" text-decoration-none" title="Phone number">+94777538775</a></li>
        
    </ul>
    
</div>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/return_policy.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/return_policy.js') }}"></script>
@endsection
