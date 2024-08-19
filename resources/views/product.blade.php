@extends('layouts.app')
@section('title','')
@section('main-content')


<!-- <h6 class="demoText__heading">product</h6> -->
<div class="bg-image d-flex align-items-center">
    <div class="container m-5 position-relative justify-content-center text-center align-items-center z-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center justify-content-center">
                <h1 class="display-1 fade-in-up text-secondary m-0">DISCOVER</h2>
                <h2 class="fade-in-up display-6 text-white fw-bold mb-0 py-0 mt-2 border-top border-bottom border-white-50 d-inline-block no-border-small">
                    OUR PRODUCT
                </h2>
            </div>
        </div>
    </div>
    
</div> 



<!-- ALL PRODUCT -->
<div class="bg-white">
    <div class="container mt-5 text-center">
        <h1 class="d-inline-block pt-5 mb-5"><span class="fw-bold text-secondary border-top border-bottom border-black d-inline-block no-border-small" >ALL PRODUCT</span></h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card all-prodect h-100 rounded-4 overflow-hidden">
                    <a href="#" class="text-decoration-none">
                        <img src="{{ asset('/img/product/1.jpg') }}" class="card-img-top" alt="Organic Ceylon Alba Cinnamon Sticks">
                        <div class="card-body ">
                            <h5 class="card-title text-start fw-bold">Organic Ceylon Alba Cinnamon Sticks</h5>
                            <p class="price card-text text-start fs-6 fw-bold" style="color: #707070;">Rs 150</p>
                            <p class="card-text text-start flex-grow-1" style="color: #707070;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="rounded-pill btn btn-primary fw-bold text-black mt-3" style=" font-size: 0.9rem; border: none;">VIEW PRODUCT</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card all-prodect h-100 rounded-4 overflow-hidden">
                    <a href="#" class="text-decoration-none">
                        <img src="{{ asset('/img/product/b1e44c5d-597a-4780-8eba-5f477adf3939.593f1418a5eda4f676df483b9527c058.webp') }}" class="card-img-top" alt="Organic Ceylon Alba Cinnamon Sticks">
                        <div class="card-body ">
                            <h5 class="card-title text-start fw-bold">Organic Ceylon Alba Cinnamon Sticks</h5>
                            <p class="price card-text text-start fs-6 fw-bold" style="color: #707070;">Rs 150</p>
                            <p class="card-text text-start flex-grow-1" style="color: #707070;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="rounded-pill btn btn-primary fw-bold text-black mt-3" style=" font-size: 0.9rem; border: none;">VIEW PRODUCT</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card all-prodect h-100 rounded-4 overflow-hidden">
                    <a href="#" class="text-decoration-none">
                        <img src="{{ asset('/img/product/Cinnamon-Powder.png') }}" class="card-img-top" alt="Organic Ceylon Alba Cinnamon Sticks">
                        <div class="card-body ">
                            <h5 class="card-title text-start fw-bold">Organic Ceylon Alba Cinnamon Sticks</h5>
                            <p class="price card-text text-start fs-6 fw-bold" style="color: #707070;">Rs 150</p>
                            <p class="card-text text-start flex-grow-1" style="color: #707070;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="rounded-pill btn btn-primary fw-bold text-black mt-3" style=" font-size: 0.9rem; border: none;">VIEW PRODUCT</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card all-prodect h-100 rounded-4 overflow-hidden">
                    <a href="#" class="text-decoration-none">
                        <img src="{{ asset('/img/product/1.jpg') }}" class="card-img-top" alt="Organic Ceylon Alba Cinnamon Sticks">
                        <div class="card-body ">
                            <h5 class="card-title text-start fw-bold">Organic Ceylon Alba Cinnamon Sticks</h5>
                            <p class="price card-text text-start fs-6 fw-bold" style="color: #707070;">Rs 150</p>
                            <p class="card-text text-start flex-grow-1" style="color: #707070;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="rounded-pill btn btn-primary fw-bold text-black mt-3" style=" font-size: 0.9rem; border: none;">VIEW PRODUCT</a>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Hale Cinnamon -->
<div class="container my-5 pt-5 bg-white">
    <div class="text-center mb-5 ">
        <h1 class="display-1 text-secondary m-0">Hale Cinnamon</h1>
        <h1 class="fw-bold"> <span class="d-inline-block border-top border-bottom border-black d-inline-block no-border-small">PURE CEYLON CINNAMON</span></h1>
    </div>

    <div class="row align-items-center h-100 justify-content-center">
        <div class="col-md-6 ">
            <p class="fw-bold m-0">Cinnamon Powder - A Culinary Delight with a Touch of Wellness</p>
            <p class="">Cinnamon powder, a culinary treasure derived from the bark of the cinnamon tree, has captivated taste buds and enriched cuisines for centuries. Its captivating aroma, reminiscent of warm woods and sweet spices, instantly elevates any dish, adding a touch of sophistication and elegance. The flavor of cinnamon powder is a delightful dance of sweet, spicy, and slightly astringent notes, harmonizing perfectly with a wide range of culinary creations.</p>
            <br />
            <p class="fw-bold m-0">Culinary Canvas for Creativity</p>
            <p class="m-0">In the realm of baking, cinnamon powder reigns supreme, weaving its magic into pastries, cakes, and desserts. It transforms humble pastries into masterpieces, infusing them with a warmth and depth that tantalizes the senses. A sprinkle of cinnamon powder elevates cakes to new heights, adding a touch of spice that balances the sweetness perfectly. And in the world of desserts, cinnamon powder is an indispensable ingredient, transforming simple dishes into culinary masterpieces.</p>
        </div>
        <div class="col-md-6">
            <div class="hale-img rounded-4 overflow-hidden mt-4">
                <img src="{{ asset('/img/background/cinnamon3.jpg') }}" alt="Cinnamon sticks and powder" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="container my-5 pt-5 bg-white">
    <div class="row align-items-center h-100 justify-content-center">
        <div class="col-md-6">
            <div class="hale-img rounded-4 overflow-hidden mb-4">
                <img src="{{ asset('/img/background/cin4.jpg') }}" alt="Cinnamon sticks and powder" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6 ">
            <p class="fw-bold m-0">Aromatic Essence with a Touch of Magic</p>
            <p class="">Cinnamon oil, extracted from the bark of the cinnamon tree, is a captivating essence that has enchanted the world for centuries. Its warm, spicy aroma, reminiscent of sun-kissed meadows and exotic spices, instantly evokes a sense of warmth and invigoration. Beyond its captivating fragrance, cinnamon oil is a treasure trove of natural benefits, offering a touch of magic to both wellness and beauty routines.</p>
            <br />
            <p class="fw-bold m-0">Aromatherapy and Wellness</p>
            <p class="m-0">In the realm of aromatherapy, cinnamon oil reigns supreme, its invigorating scent stimulating the senses and promoting a sense of well-being. Diffusing cinnamon oil in your home or workplace can uplift the atmosphere, creating a cozy and inviting ambiance. Additionally, cinnamon oil's anti-inflammatory properties may help soothe muscle aches and pains, while its warming effect may alleviate discomfort during cold or flu season.</p>
        </div>
    </div>
</div>
<!-- certificate -->

<div class="certification-section pt-5">
  <div class="container">
    <h1 class="text-center mb-5 fw-bold text-white position-relative "><span class="border-top border-bottom border-white d-inline-block no-border-small" >OUR CERTIFICATION</span></h1></h1>
    <div class="row row-cols-1 row-cols-md-3 g-3">
      <div class="col px-2">
        <div class="card h-100 bg-transparent border-0">
          <img src="{{ asset('/img/certificate-1.jpg') }}" class="card-img-top rounded-4 certificate-img align-self-center" alt="OCOP Certificate" style="width: 80%;">
          <div class="card-body text-center">
            <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col px-2">
        <div class="card h-100 bg-transparent border-0">
          <img src="{{ asset('/img/certificate-1.jpg') }}" class="card-img-top rounded-4 certificate-img align-self-center" alt="OCOP Certificate" style="width: 80%;">
          <div class="card-body text-center">
            <p class="card-text text-white">This is a short card.</p>
          </div>
        </div>
      </div>
      <div class="col px-2">
        <div class="card h-100 bg-transparent border-0">
          <img src="{{ asset('/img/certificate-1.jpg') }}" class="card-img-top rounded-4 certificate-img align-self-center" alt="OCOP Certificate" style="width: 80%;">
          <div class="card-body text-center">
            <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col px-2">
        <div class="card h-100 bg-transparent border-0">
          <img src="{{ asset('/img/certificate-1.jpg') }}" class="card-img-top rounded-4 certificate-img align-self-center" alt="OCOP Certificate" style="width: 80%;">
          <div class="card-body text-center">
            <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col px-2">
        <div class="card h-100 bg-transparent border-0">
          <img src="{{ asset('/img/certificate-1.jpg') }}" class="card-img-top rounded-4 certificate-img align-self-center" alt="OCOP Certificate" style="width: 80%;">
          <div class="card-body text-center">
            <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col px-2">
        <div class="card h-100 bg-transparent border-0">
          <img src="{{ asset('/img/certificate-1.jpg') }}" class="card-img-top rounded-4 certificate-img align-self-center" alt="OCOP Certificate" style="width: 80%;">
          <div class="card-body text-center">
            <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/product.js') }}"></script>
@endsection