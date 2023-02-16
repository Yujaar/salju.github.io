@extends('Layouts.Main')
@section('Body')
@section('css')
    <link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />
    <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">
@endsection
@php
function duit($angka){
      $hasil_rupiah = "". number_format($angka,0,',','.');
      return $hasil_rupiah;
      }
@endphp
<style>
  :root {
    --red: hsl(0, 78%, 62%);
    --cyan: hsl(180, 62%, 55%);
    --orange: hsl(34, 97%, 64%);
    --blue: hsl(212, 86%, 64%);
    --varyDarkBlue: hsl(234, 12%, 34%);
    --grayishBlue: hsl(229, 6%, 66%);
    --veryLightGray: hsl(0, 0%, 98%);
    --weight1: 200;
    --weight2: 400;
    --weight3: 600;
}


.attribution { 
    font-size: 11px; text-align: center; 
}
.attribution a { 
    color: hsl(228, 45%, 44%); 
}

h1:first-of-type {
    font-weight: var(--weight1);
    color: var(--varyDarkBlue);

}

h1:last-of-type {
    color: var(--varyDarkBlue);
}

@media (max-width: 400px) {
    h1 {
        font-size: 1.5rem;
    }
}

.header {
    text-align: center;
    line-height: 0.8;
    margin-bottom: 50px;
    margin-top: 50px;
}

.header p {
    margin: 0 auto;
    line-height: 2;
    color: var(--grayishBlue);
}

img {
    float: right;
}

@media (max-width: 450px) {
    .box {
        height: 200px;
    }
}

@media (max-width: 950px) and (min-width: 450px) {
    .box {
        text-align: center;
        height: 180px;
    }
}

.cyan {
  border-top: 5px solid var(--cyan);
    border-bottom: 5px solid var(--cyan);
    animation-name: blinking;
    animation-duration: 1s;
    animation-iteration-count: 100;
}
.red {
    border-top: 5px solid var(--red);
    border-bottom: 5px solid var(--red);
    animation-name: blinking;
    animation-duration: 1s;
    animation-iteration-count: 100;
}
.blue {
    border-top: 5px solid var(--blue);
    border-bottom: 5px solid var(--blue);
    animation-name: blinking;
    animation-duration: 1s;
    animation-iteration-count: 100;
}
.orange {
    border-top: 5px solid var(--orange);
    border-bottom: 5px solid var(--orange);
    animation-name: blinking;
    animation-duration: 1s;
    animation-iteration-count: 100;
}
@keyframes blinking {
  50% {
    border-color: #ffcd5f;
  }
}

h2 {
    color: var(--varyDarkBlue);
    font-weight: var(--weight3);
}


@media (min-width: 950px) {
    .row1-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .row2-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .header p {
        width: 30%;
    }
    
}

</style>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->



        <!-- Camera Card Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-4">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <img src="images/Bismillah-Bocimi.png" alt="" style="height: 100px; width:250px;"> 
                        </div>
                    </div>
                    <div class="col-lg-8 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5 ">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-info active" data-bs-toggle="pill" href="#tab-1"><i class="bi bi-camera-video"></i> CCTV</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-info" data-bs-toggle="pill" href="#tab-2"><i class="bi bi-tv"></i> VMS</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-info" data-bs-toggle="pill" href="#tab-3"><i class="bi bi-tv"></i> LALIN</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">

                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach($query as $key => $data)   
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item overflow-hidden" style="border-radius:15px; width:350px; height:250px; object-fit:fill;">
                                    <div class="position-relative overflow-hidden" style="background-color:transparent; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">                                 
                                            <video width="350" height="250" style="border-radius:15px; object-fit:fill; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;" id='hls-example{{$key}}' class="video-js vjs-default-skin stream"  controls autoplay>
                                            <source type="application/x-mpegURL" src="{{$data->http_link}}">
                                            </video>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{$data->lokasi}}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach  
                        </div>
                    </div>




                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            @foreach($VMS as $key => $data)   
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item overflow-hidden" style="border-radius:15px; width:350px; height:250px; object-fit:fill;">
                                    <div class="position-relative overflow-hidden" style="background-color:transparent; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">                                 
                                            <video width="350" height="250" style="border-radius:15px; object-fit:fill; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;" id='hls2-example{{$key}}' class="video-js vjs-default-skin stream"  controls autoplay>
                                            <source type="application/x-mpegURL" src="{{$data->http_link}}">
                                            </video>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{$data->lokasi}}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach  
                        </div>
                    </div>




                  

                </div>
            </div>
        </div>

                                
        <!-- Camera Card End -->   
        <!-- Back to Top -->
        <a href="{{route('actionlogout')}}" class="btn btn-lg btn-info text-white btn-lg-square logout"><i class="bi bi-door-open"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src='https://vjs.zencdn.net/7.5.4/video.js'></script> 
    <script src="https://vjs.zencdn.net/7.5.5/video.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

<script>

    @php
    foreach($query2 as $key => $data){
    @endphp 
        options = {
        autoplay: true,
        muted: true
        }
        video = videojs('hls-example{{$key}}', options);
    @php
    }
    @endphp 
    
    
</script>
<script>

    @php
    foreach($VMS2 as $key => $data){
    @endphp 
        options = {
        autoplay: true,
        muted: true
        }
        video = videojs('hls2-example{{$key}}', options);
    @php
    }
    @endphp 
    
    
</script>

<script>
function currentTime() {
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Augustus", "September", "Oktober", "November", "Desember"
  ];

    let date = new Date(); 
    let tgl = date.getDate();
    let bulan = monthNames[date.getMonth()];
    let thn = date.getFullYear();
    let hh = date.getHours();
    let mm = date.getMinutes();
    let ss = date.getSeconds();
    let session = "AM";

    if(hh === 0){
        hh = 12;
    }
    if(hh > 12){
        hh = hh - 12;
        session = "PM";
    }

    hh = (hh < 10) ? "0" + hh : hh; 
    mm = (mm < 10) ? "0" + mm : mm;
    ss = (ss < 10) ? "0" + ss : ss;
      
    let time =  "TANGGAL : " + tgl + " " + bulan + " " + thn + " | " + hh + ":" + mm + ":" + ss + " " + session;

    document.getElementById("clock").innerText = time; 
    let t = setTimeout(function(){ currentTime() }, 1000);
  }

  currentTime();
</script>
<script>
    $(document).ready(function() {
	setInterval(function() {
		$("#screen").load('banners.php')
	}, 2000);
});
</script>
  

@endsection