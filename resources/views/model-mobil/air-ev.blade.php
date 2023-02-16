@extends('Layout.Main')

@section('Content')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    section .section-title {
        text-align: center;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #tabs {
        color: #0dcaf0;
    }

    #tabs h6.section-title {
        color: #0dcaf0;
    }

    #tabs .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #f3f3f3;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        border-bottom: 4px solid !important;
        font-size: 20px;
    }

    #tabs .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: #0dcaf0;
        font-size: 18px;
    }

</style>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('img/air-ev/KV-Wuling-Airev-Desktop.png')}});"> <br> <br> <br> <br> <br> <br> <br> <br>
    <div class="container-fluid  py-5" >
        <div class="container text-center" >
            <h1 class="display-3 text-white mb-3 animated slideInDown"></h1> 
            <div class="card shadow border" style="opacity: 0.9;" >
                <div
                    class="card-body d-flex flex-column ">
                    <div class="row">
                        <div class="col-lg-2">
                            <h4 class="card-text" style="margin-top: 18px">Air ev</h4>
                        </div>
                        <div class="col-lg-6">
                           <p>Harga Mulai</p>
                           <h4 class="card-text">Rp 243.000.000</h4>
                        </div>
                        <div class="col-lg-3" style="margin-top: 16px; ">
                            <a href="" class="btn btn-info text-white" data-toggle="modal" data-target="#exampleModalLong" style="border-radius: calc(0.5rem - 1px)" >Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl">
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Model Mobil //</h6>
                <h1 class="mb-5">Tipe Air ev</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center wow fadeInUp" data-wow-delay="0.3s">
                <img class="p-2 mx-auto mb-3 style" src="{{asset('https://wuling.id/assets/images/air-ev/color/xWhite.png.pagespeed.ic.X-znZux25p.webp')}}">
                <h5 class="mb-0">Air Ev - Long Range</h5>
                <p>UP TO 300 KM</p>
                <div class="testimonial-text bg-light text-center p-4" style="border-radius: calc(0.5rem - 1px)" >
                    <h4 class="mb-0">Rp. 299.500.000</h4>
                </div>

                </div>
                <div class="testimonial-item text-center wow fadeInUp" data-wow-delay="0.1s">
                    <img class="p-2 mx-auto mb-3 style" src="{{asset('https://wuling.id/assets/images/air-ev/color/standard/xair-ev-standard-yellow_2.png.pagespeed.ic.vlFdxXz2K8.webp')}}">
                    <h5 class="mb-0">Air Ev - Standard Range</h5>
                    <p>UP TO 200 KM</p>
                    <div class="testimonial-text bg-light text-center p-4" style="border-radius: calc(0.5rem - 1px)">
                        <h4 class="mb-0">Rp. 243.000.000</h4>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>



<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-12">
            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-info text-uppercase">// Tipe Air ev //</h6>
                    <h1 class="mb-5">Color Vriant</h1>
                </div>
                <section id="tabs">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Long
                                        Range</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Standard Range</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="col-lg-8">
                                            <div class="tab-content w-100">
                                                <div class="tab-pane show active" id="tab-pane-1">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Pristine White //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/xWhite.png.pagespeed.ic.X-znZux25p.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-pane-2">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Avocado Green //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/xGreen.png.pagespeed.ic.wc7k2D-lOq.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-pane-3">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Lemon Yellow //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/xYellow.png.pagespeed.ic.RtkQfemn8d.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-pane-4">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Peach Pink //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/xPink.png.pagespeed.ic.gX7Kusuaru.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-pane-5">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Galaxy Blue //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/xBlue.png.pagespeed.ic.PGnWVe6yTn.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-12 mx-auto">
                                                        <div class="card shadow border">
                                                            <div
                                                                class="card-body d-flex flex-column align-items-center">
                                                                <p class="card-text">Select Color</p>
                                                                <div class="nav nav-pills">
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start float-left active"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-1">1</button>
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-2">2</button>
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-3">3</button>
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-4">4</button>
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start float-right"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-5">5</button>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="card shadow border">
                                                                    <div class="card-body d-flex flex-column align-items-center">
                                                                        <a href=""
                                                                            class="btn btn-info text-white py-3 px-lg-3 d-none d-lg-block">Pesan
                                                                            Sekarang<i class="fa fa-phone ms-3"></i></a>
                                                                    </div>
                                                                </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="tab-content w-100">
                                                <div class="tab-pane show active" id="tab-pane-11">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Pristine White //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/standard/xair-ev-standard-white_2.png.pagespeed.ic.EgzLHlwoTp.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-pane-22">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Avocado Green //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/standard/xair-ev-standard-green_2.png.pagespeed.ic.iYPClGmjw8.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-pane-33">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Lemon Yellow //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/standard/xair-ev-standard-yellow_2.png.pagespeed.ic.vlFdxXz2K8.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-pane-44">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Peach Pink //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/standard/xair-ev-standard-pink_2.png.pagespeed.ic.M8xaDdBoSA.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-pane-55">
                                                    <div class="row g-4">
                                                        <div class="col-md-12" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <h6 class="text-dark">// Galaxy Blue //</h6>
                                                                <br><br><br><br>
                                                                <img class="position-absolute img-fluid"
                                                                    src="https://wuling.id/assets/images/air-ev/color/standard/xair-ev-standard-blue_2.png.pagespeed.ic.c8N2Bcu0Jf.webp"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-12 mx-auto">
                                                        <div class="card shadow border">
                                                            <div
                                                                class="card-body d-flex flex-column align-items-center">
                                                                <p class="card-text">Select Color</p>
                                                                <div class="nav nav-pills">
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start float-left active"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-11">1</button>
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-22">2</button>
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-33">3</button>
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-44">4</button>
                                                                    <button
                                                                        class="nav-link w-20 d-flex align-items-center text-start float-right"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#tab-pane-55">5</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- <div class="card shadow border">
                                                                <div class="card-body d-flex flex-column align-items-center">
                                                                    <a href=""
                                                                        class="btn btn-info text-white py-3 px-lg-3 d-none d-lg-block style">Pesan
                                                                        Sekarang<i class="fa fa-phone ms-3"></i></a>
                                                                </div>
                                                            </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> <br> <br> <br> <br> <br> <br> <br> <br>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('https://wuling.id/assets/images/air-ev/xg20-2.jpg.pagespeed.ic.lusCZg8-Nq.webp')}});">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center" style="height: ">
            <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
            <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
            <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
            <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-12">
            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-info text-uppercase">// Spesification //</h6>
                    <h1 class="mb-5">SPESIFICATION</h1>
                </div>
        
                <section id="tabs">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#spec-long" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Long Range</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#spec-standard" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Standard Range</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="spec-long" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-12 mx-auto">
                                            <div class="col-lg-12">
                                                <!-- Nav pills -->
                                                <ul class="nav nav-pills nav-justified" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="pill"
                                                            href="#LongSpecDimen">Dimensions And Chassis</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="pill"
                                                            href="#LongSpecMain">Main
                                                            Battrey And Powertrain</a>
                                                    </li>
                                                </ul>
                                                <hr>
        
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div id="LongSpecDimen" class="tab-pane show active"><br>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Length x Width x
                                                                        Height (mm)</td>
                                                                    <td>2,974 x 1,505 x
                                                                        1,631</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheelbase (mm)</td>
                                                                    <td>2,010</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Seat capacity</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Suspension</td>
                                                                    <td>McPherson (Front) +
                                                                        3-link coil spring
                                                                        (Rear)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel and tire</td>
                                                                    <td>12” steel wheel with
                                                                        full cap; 145/70R12
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brakes</td>
                                                                    <td>Disc (Front) + Drum
                                                                        (Rear)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Steering</td>
                                                                    <td>Electric Power
                                                                        Steering</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="LongSpecMain" class="tab-pane"><br>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Battery type</td>
                                                                    <td>Lithium
                                                                        Ferro-Phosphate;
                                                                        IP67 rating</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery capacity /
                                                                        Rated voltage</td>
                                                                    <td>26.7 kWh / 115 V
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Range</td>
                                                                    <td>UP TO 300 Km</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Charging duration
                                                                    </td>
                                                                    <td>4 hours with 6.6 kW AC</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive motor</td>
                                                                    <td>30 kW, rear wheel
                                                                        drive</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Transmission</td>
                                                                    <td>Single reduction
                                                                        gear</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="spec-standard" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row">
                                        <div class="col-12 mx-auto">
                                            <div class="col-lg-12 ">
                                                <!-- Nav pills -->
                                                <ul class="nav nav-pills nav-justified" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="pill"
                                                            href="#StandSpecDimen">Dimensions And Chassis</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="pill"
                                                            href="#StandSpecMain">Main
                                                            Battrey And Powertrain</a>
                                                    </li>
                                                </ul>
                                                <hr>
        
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div id="StandSpecDimen" class="tab-pane show active"><br>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Length x Width x
                                                                        Height (mm)</td>
                                                                    <td>2,974 x 1,505 x
                                                                        1,631</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheelbase (mm)</td>
                                                                    <td>2,010</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Seat capacity</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Suspension</td>
                                                                    <td>McPherson (Front) +
                                                                        3-link coil spring
                                                                        (Rear)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel and tire</td>
                                                                    <td>12” steel wheel with
                                                                        full cap; 145/70R12
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brakes</td>
                                                                    <td>Disc (Front) + Drum
                                                                        (Rear)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Steering</td>
                                                                    <td>Electric Power
                                                                        Steering</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="StandSpecMain" class="tab-pane fade"><br>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Battery type</td>
                                                                    <td>Lithium
                                                                        Ferro-Phosphate;
                                                                        IP67 rating</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery capacity /
                                                                        Rated voltage</td>
                                                                    <td>17.3 kWh / 115 V
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Range</td>
                                                                    <td>UP TO 200 Km</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Charging duration
                                                                    </td>
                                                                    <td>8.5 hours with 2.0
                                                                        kW AC</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive motor</td>
                                                                    <td>30 kW, rear wheel
                                                                        drive</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Transmission</td>
                                                                    <td>Single reduction
                                                                        gear</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section>
        
        
            </div>
        </div>
    </div>
</div>



    @endsection
