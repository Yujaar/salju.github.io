
 <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent" style="z-index: 999;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 px-4" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="" src="{{asset('assets/img/Logo/icon-luxury.png')}}" alt="" style="width: 150px; height: 50px;">
                </div>
                {{-- <h1 class="m-0 text-info">Maharani</h1> --}}
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu rounded-10 m-0">
                            <a href="#Villa" class="dropdown-item">Villa</a>
                            <a href="#Catering" class="dropdown-item">Catering</a>
                        </div>
                    </div>
                </div>
                <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-info text-white border-0 w-100 py-3"><i class="fa fa-phone-alt me-2"></i>Booking</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->