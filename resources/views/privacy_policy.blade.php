@extends('layouts.app')
@section('title','')
@section('main-content')


<!-- <h6 class="demoText__heading">privacy_policy</h6> -->
<div class="bg-image d-flex align-items-center">
    <div class="container m-5 position-relative justify-content-center text-center align-items-center z-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center justify-content-center">
                <h2 class="display-5 text-white fw-bold mb-0 fade-in-up border-top border-bottom border-white d-inline-block no-border-small">
                Privacy Policy
                </h2>
            </div>
        </div>
    </div>

</div>



<!-- policy -->
<div class="container mt-5 p-md-0 p-lg-0 p-4">

    <h3 class="fs-5 mt-5 fw-semibold">Hale Cinnamon Return Policy</h3>
    <p class="text-muted">Last Updated: <span class="fw-bold">22.06.2024</span></p>
    <p class="text-muted">Hale Cinnamon respects the privacy of our users. This Privacy Policy describes the types of information we collect from and about you when you visit our website www.halecinnamon.com and how we use that information.</p>
    <h3 class="fs-5 mt-4 fw-semibold">Information We Collect</h3>
    <p class="text-muted">We collect several types of information from and about users of our Website:</p>
    <ul class="mb-4 text-muted">
        <li><span class="fw-semibold">Personal Information:</span> This includes information that can be used to identify you, such as your name, email address, phone number, and billing address. We only collect this information when you voluntarily provide it to us, such as when you place an order, subscribe to our newsletter, or contact us for support.</li>
        <li><span class="fw-semibold">Non-Personal Information: </span>This includes information that cannot be used to identify you, such as your browser type, operating system, IP address, browsing history, and demographic information. We collect this information automatically when you visit our Website.</li>

    </ul>

    <h3 class="fs-5 mt-4 fw-semibold">How We Use Your Information</h3>
    <p class="text-muted">We use the information we collect from and about you for the following purposes:</p>
    <ul class="mb-4 text-muted">
        <li>To process your orders and fulfill your requests.</li>
        <li>To send you important information about your orders, including order confirmations and shipping notifications.</li>
        <li>To send you marketing communications, such as newsletters and promotional offers, if you have opted-in to receive them.</li>
        <li>To personalize your experience on our Website.</li>
        <li>To improve our Website and services.</li>
        <li>To comply with legal and regulatory requirements.</li>
    </ul>
    <h3 class="fs-5 mt-4 fw-semibold">Sharing Your Information</h3>

    <p class="mb-4">We will not share your personal information with third parties except in the following cases:</p>
    <ul class="mb-4 text-muted">
        <li>With service providers that help us operate our website and fulfill your orders, such as payment processors and shipping companies. These service providers are only authorized to use your information for the specific task for which they are hired.</li>
        <li>To comply with legal and regulatory requirements.</li>
        <li>In the event of a business transfer, such as a merger or acquisition.</li>
    </ul>
    <h3 class="fs-5 mt-4 fw-semibold">Your Choices</h3>
    <p class="text-muted mb-4">YYou have choices regarding your information:</p>
    <ul class="mb-4 text-muted">
        <li>You can opt-out of receiving marketing communications from us by following the unsubscribe instructions in those communications.</li>
        <li>You can access and update your personal information by contacting us.</li>
    </ul>

    <h3 class="fs-5 mt-4 fw-semibold">Data Security</h3>
    <p class="text-muted mb-4">We take reasonable steps to protect the information you provide to us from unauthorized access, disclosure, alteration, or destruction. However, no website or internet transmission is completely secure. We cannot guarantee the security of your information.</p>

    <h3 class="fs-5 mt-4 fw-semibold">Changes to this Privacy Policy</h3>
    <p class="text-muted mb-4">We may update this Privacy Policy from time to time. We will post any changes to this Privacy Policy on our Website. We encourage you to review this Privacy Policy periodically to stay informed of any updates.</p>


    <h3 class="fs-5 mt-4 fw-semibold">Contact Us</h3>
    <p class="text-muted mb-3">If you have any questions about our return policy, please contact us at:</p>
    <ul class="mb-4 text-muted">
        <li>Email: <a href="mailto:youremail@example.com" class=" text-decoration-none" title="Mail">info@halecinnamon.com</a></li>
        <li>Phone: <a href="https://halecinnamon.com/tel:+94777538775" class=" text-decoration-none" title="Phone number">+94777538775</a></li>

    </ul>

</div>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/privacy_policy.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/privacy_policy.js') }}"></script>
@endsection