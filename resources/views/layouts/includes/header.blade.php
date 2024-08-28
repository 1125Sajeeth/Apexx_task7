<header>
   


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#" onclick="goToHomePage()">
      <h2 class="mb-0">◀︎Apexx</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ">
        <ul class="navbar-nav justify-content-center flex-grow-1">
          <li class="nav-item mx-4">
            <a class="nav-link" href="{{ route('order') }}" onclick="navigateTo('home')">Order Management</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="{{ route('product') }}" onclick="navigateTo('about')">Product Management</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="{{ route('slider') }}" onclick="navigateTo('product')">Slider Management</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

</header>


