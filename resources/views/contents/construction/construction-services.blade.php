@extends('layout.index')

@section('recaptcha')
    {!! htmlScriptTagJsApi() !!}
@endsection

@section('content')
<section class="service-container">
    <div class="container-fluid service-header">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-sm-12">
                        <h1 class="text-white fade-in-top">General Contractor</h1>
                        <ul class="text-white d-flex justify-content-center flex-column" style="list-style:none">
                            <li class="mt-4 fade-in-left">
                                <p class="fs-4">
                                    <i class="fa-solid fa-bridge"></i> &nbsp;&nbsp;
                                    Infrastructure Construction
                                </p>
                            </li>
                            <li class="mt-4  fade-in-right">
                                <p class="fs-4">
                                    <i class="fa-solid  fa-warehouse"></i>&nbsp;&nbsp;
                                    Residential & Commercial Construction
                                </p>
                            </li>
                            <li class="mt-4  fade-in-left">
                                <p class="fs-4">
                                    <i class="fa-solid fa-pen-ruler"></i>&nbsp;&nbsp;
                                     Architectural & Engineering Design
                                </p>
                            </li>
                            <li class="mt-4  fade-in-left">
                                <p class="fs-4">
                                    <i class="fa-solid fa-house-crack"></i>&nbsp;&nbsp;
                                    Renovation & Remodeling
                                </p>
                            </li>
                            <li class="mt-4  fade-in-left">
                                <p class="fs-4">
                                    <i class="fa-solid fa-bars-progress"></i>&nbsp;&nbsp;
                                    Project Management
                                </p>
                            </li>
                        </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h1 class="text-white  fade-in-right">Specialized Works</h1>
                <ul class="text-white d-flex justify-content-center flex-column" style="list-style:none">
                    <li class="mt-4">
                        <p class="fs-4  fade-in-left">
                            <i class="fa-solid fa-wind"></i>&nbsp;&nbsp;
                            H.V.A.C
                        </p>
                    </li>
                    <li class="mt-4  fade-in-right">
                        <p class="fs-4">
                            <i class="fa-solid fa-bolt"></i>&nbsp;&nbsp;
                            Electrical Services
                        </p>
                    </li>
                    <li class="mt-4  fade-in-left">
                        <p class="fs-4">
                            <i class="fa-solid fa-hill-rockslide"></i>&nbsp;&nbsp;
                            Masonry Works
                        </p>
                    </li>
                    <li class="mt-4  fade-in-bottom">
                        <p class="fs-4">
                            <i class="fa-solid fa-arrow-up-from-water-pump"></i>&nbsp;&nbsp;
                            Plumbing
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 d-flex justify-content-end" style="">
                <button class="btn btn-lg btn-light" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  <span class="mx-5">
                    Build With Us
                  </span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <br>
</section>
<br>
<br>
<br>
<br><div class="d-flex justify-content-center">
    <hr width="60%">
</div>
<br>
<br>
<br>
<br>
<section class="portfolio-contents">
<br>
<br>
<br>
<br>
    <div class="container-fluid project" id="project-container">
     <div class="container-fluid blur">
        <div class="row content-row card-content">
            <div class="col-lg-5 col-sm-12 content-pic">
                <img src="{{ asset('images/picv2/6.jpg') }}" alt="project-1">
            </div>
            <div class="col-lg-7 col-sm-12 content-text">
                <h3>Infrastructure Construction</h3>
                <p>
                    Elevate your region's future with our top-notch Infrastructure
                    Construction services. We deliver precision, durability, and 
                    progress, ensuring roads, bridges, and utilities stand as pillars
                    of prosperity. Build the future with us!
                </p>
            </div>
        </div>
     </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><div class="d-flex justify-content-center">
        <hr width="60%">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid project" id="project-container-2">
        <div class="container-fluid blur">
           <div class="row content-row card-content">
               <div class="col-lg-7 col-sm-12 content-text-2">
                <h3>Residential Construction</h3>
                <p>
                 Transform dreams into homes with our Residential 
                 Construction. Crafted with precision, we build spaces
                 where memories are made. Trust us to bring your 
                 vision to life, one brick at a time.
                </p>
               </div>
               <div class="col-lg-5 col-sm-12 content-pic">
                <img src="{{ asset('images/picv2/1.jpg') }}" alt="project-2">
                </div>
           </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><div class="d-flex justify-content-center">
        <hr width="60%">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid project" id="project-container-3">
        <div class="container-fluid blur">
           <div class="row content-row card-content">
               <div class="col-lg-5 col-sm-12 content-pic">
                   <img src="{{ asset('images/portfolio_3.jpg') }}" alt="project-3">
               </div>
               <div class="col-lg-7 col-sm-12 content-text">
                   <h3>Commercial Construction</h3>
                   <p>
                    Unlock your business potential with our Commercial
                    Construction expertise. From sleek offices to vibrant retail
                    spaces, we craft environments that inspire success. 
                    Elevate your brand with our impeccable construction
                    solutions!
                   </p>
               </div>
           </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><div class="d-flex justify-content-center">
        <hr width="60%">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid project" id="project-container-2">
        <div class="container-fluid blur">
           <div class="row content-row card-content">
               <div class="col-lg-7 col-sm-12 content-text-2">
                <h3>Architectural & Engineering Design</h3>
                <p>
                    The fusion of art and functionality in architectural and engineering design shapes the spaces we live in, creating a dynamic interplay between form and function. This interaction not only defines physical structures but also molds our experience and interaction with the surrounding environment.
                </p>
               </div>
               <div class="col-lg-5 col-sm-12 content-pic">
                <img src="{{ asset('images/archi1.jpg') }}" alt="project-2">
                </div>
           </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><div class="d-flex justify-content-center">
        <hr width="60%">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid project" id="project-container-3">
        <div class="container-fluid blur">
           <div class="row content-row card-content">
               <div class="col-lg-5 col-sm-12 content-pic">
                   <img src="{{ asset('images/renovation1.jpg') }}" alt="project-3">
               </div>
               <div class="col-lg-7 col-sm-12 content-text">
                   <h3>Renovation & Remodeling</h3>
                   <p>
                    A transformative process that seamlessly blends aesthetic refinement with practical enhancements, reshaping living spaces. It goes beyond mere upgrades, becoming a method of personalization and optimization, creating a unique sanctuary that mirrors the evolving needs and preferences of its inhabitants.
                   </p>
               </div>
           </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><div class="d-flex justify-content-center">
        <hr width="60%">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid project" id="project-container-2">
        <div class="container-fluid blur">
           <div class="row content-row card-content">
               <div class="col-lg-7 col-sm-12 content-text-2">
                <h3>Project Management</h3>
                <p>
                    A process of planning and overseeing task execution to achieve goals within a set timeframe. 
                    It guides projects from initiation to completion, ensuring efficient and effective goal attainment.
                    This systematic approach facilitates successful project delivery across industries, especially in construction and technology.
                </p>
               </div>
               <div class="col-lg-5 col-sm-12 content-pic">
                <img src="{{ asset('images/pm1.jpg') }}" alt="project-2">
                </div>
           </div>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><div class="d-flex justify-content-center">
        <hr width="60%">
    </div>
    <br>
    <br>
    <br>
    <br>
</section>
<section class="specialty-container pt-5">
    <br>
    <br>
    <div class="container-fluid blur-service ">
        <div class="row d-flex justify-cotent-center mb-5">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="text-white">Specialized Works</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-evenly  card-content">
            <div class="col-lg-4 mb-5">
                <div class="card" >
                    <img src="{{ asset('images/plumbing-service.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Plumbing Works</h5>
                      <p class="card-text">Mastering pipelines, fixtures, and water systems,
                        we deliver impeccable plumbing solutions for homes
                         and businesses.</p>

                    </div>
                  </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card" >
                    <img src="{{ asset('images/hvac-service.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">HVAC</h5>
                      <p class="card-text">Masters of climate control, our HVAC 
                        expertise ensures comfort, energy efficiency,
                        and superior air quality in every space.</p>

                    </div>
                  </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class=" row d-flex justify-content-evenly  card-content">
            <div class="col-lg-4 mb-5">
                <div class="card" >
                    <img src="{{ asset('images/roofing-service.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Roofing Works</h5>
                      <p class="card-text">Roofing perfectionists, we safeguard your shelter
                        with top-quality materials and craftsmanship,
                        ensuring lasting protection and aesthetics.</p>
       
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card" >
                    <img src="{{ asset('images/masonry-service.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Masonry Works</h5>
                      <p class="card-text">Skilled in masonry, we create enduring structures
                        with precision and artistry, adding timeless beauty
                         and strength to spaces.</p>

                    </div>
                  </div>
            </div>
            <div class="row d-flex justify-cotent-center mt-5">
                <div class="d-grid gap-2 col-lg-3 col-sm-12 mx-auto">
                    <button class="btn btn-lg btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Request A Quote</button>
                  </div>
            </div>
        </div>
    </div>
      <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><div class="d-flex justify-content-center">
        <hr width="60%">
    </div>
    <br>
    <br>
    <br>
    <br>
</section>
@include('include.quote-modal')
@endsection