
@extends('Layout.Main')

@section('Content')

 

    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/air-ev/KV-Wuling-Airev-Desktop.png" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Model Mobil //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Wuling AIR EV</h1>
                                    <a href="" class="btn btn-info text-white py-3 px-5 animated slideInDown style">Detail
                                        Produk<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/air-ev/air-ev-long-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/almaz-hybrid/1440x600-kv-almaz-hybrid-product.png" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Model Mobil //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Wuling Almaz Hybrid</h1>
                                    <a href="" class="btn btn-info text-white py-3 px-5 animated slideInDown style">Detail
                                        Produk<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/almaz-hybrid/almaz-hybrid-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="carousel-item">
                    <img class="w-100" src="img/new-convero-s/KV-Product-New-Confero-S-130722.png" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Model Mobil //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Wuling New Confero S
                                    </h1>
                                    <a href="" class="btn btn-info text-white py-3 px-5 animated slideInDown style">Detail
                                        Produk<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/new-convero-s/new-confero-s-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>


            
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7 pt-4 " style="min-height: 400px;">
                    <div class="position-relative h-100 wow zoomIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100 " src="{{asset('img/wuling-cikarang.jpg')}}"
                            style="object-fit: cover; border-radius: 15px 50px;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, .08); border-radius: 15px 50px;"">
                            <h1 class=" display-4 text-white mb-0">6 <span class="fs-4">Tahun</span></h1>
                            <h4 class="text-white">Berdiri</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h6 class="text-info text-uppercase wow zoomIn">// Tentang Kami //</h6>
                    <h1 class="mb-4 wow zoomIn">Dealer <span class="text-info">WULING</span> Cikarang</h1>
                    <p class="mb-4 wow zoomIn">Dapatkan Diskon, Promo & Harga Terbaik</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Harga Terbaik</h6>
                                    <span>Dapatkan Harga Terbaik dari Kami</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Selalu ada Diskon</h6>
                                    <span>Diskon Setiap Event tetentu !</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>24 JAM Service</h6>
                                    <span>Siap Melayani anda 24 Jam</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-info text-white py-3 px-5 style">Detail Promo<i
                            class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">6</h2>
                    <p class="text-white mb-0">Tahun Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                    <p class="text-white mb-0">Teknisi Ahli</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Klien yang Puas</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Mobil Terjual per Tahun</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-info text-uppercase">// PELAYANAN KAMI //</h6>
                <h1 class="mb-5">Jelajahi Layanan Kami</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Tes Diagnostik</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Servis Mesin</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Penggantian Ban</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Ganti Oli</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Tahun Pengalaman Dalam Servis Mobil</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                        justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-info py-3 px-5 mt-3 text-white style">Baca Selengkapnya<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                        justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-info py-3 px-5 mt-3 text-white style">Baca Selengkapnya<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                        justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-info py-3 px-5 mt-3 text-white style">Baca Selengkapnya<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                        justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-info py-3 px-5 mt-3 text-white style">Baca Selengkapnya<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-info text-uppercase">// Teknisi Kami //</h6>
                <h1 class="mb-5">Sales Counter</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center wow fadeInUp" data-wow-delay="0.3s">
                    <img class="bg-light p-2 mx-auto mb-3 style" src="{{asset('img/team-1.jpg')}}">
                </div>
                <div class="testimonial-item text-center wow fadeInUp" data-wow-delay="0.1s">
                    <img class="bg-light p-2 mx-auto mb-3 style" src="{{asset('img/team-2.jpg')}}">
                </div>
                <div class="testimonial-item text-center wow fadeInUp" data-wow-delay="0.5s">
                    <img class="bg-light p-2 mx-auto mb-3 style" src="{{asset('img/team-3.jpg')}}">
                </div>
                <div class="testimonial-item text-center wow fadeInUp" data-wow-delay="0.7s">
                    <img class="bg-light p-2 mx-auto mb-3 style" src="{{asset('img/team-4.jpg')}}">
                </div>
            </div>
        </div>
    </div>

    

@endsection

