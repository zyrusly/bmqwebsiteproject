@extends('layout.index')

@section('content')
<section class="portfolio-container">
    <div class="container-fluid portfolio-header">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-sm-12 title-container" >
               <h1 class="fade-in-left">
                A COLLECTION OF OUR
                HARDWORK  & HONEST LABOR
               </h1>
               <p class="mt-5 fade-in-right">
                BMQ BUILDERS AND SUPPLY CORPORATION HANDLES ALL OF THE 
               </p>
               <p class=" fade-in-left">MATERIAL SOURCING AND CONSTRUCTION OF EACH PROJECT</p>
               <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-end mt-3 fade-in-bottom">
                <button type="button" class="btn btn-lg btn-outline-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> BUILD WITH US</button>
                </div>
            </div>
            
        </div>
    </div>
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
                <img src="{{ asset('images/portfolio_1.jpg') }}" alt="project-1">
            </div>
            <div class="col-lg-7 col-sm-12 content-text">
                <h3>Project 1: Slope Stabilization</h3>
                <p>
                    Mountain side construction involves building 
                    infrastructure on steep terrain, often requiring 
                    specialized engineering techniques such as terracing, 
                    retaining walls, and slope reinforcement. This allows 
                    for the development of roads, buildings, or other 
                    structures on mountainous landscapes.
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
    {{-- <div class="container-fluid project" id="project-container-2">
        <div class="container-fluid blur">
           <div class="row content-row card-content">
               <div class="col-lg-7 col-sm-12 content-text-2 ">
                   <h3>Project : Second Project</h3>
                   <p>
                    Dedication to the construction and repair of roads
                    signifies the backbone of progress, fostering connectivity,
                    enhancing safety, and enabling economic growth. It embodies
                    relentless commitment, ensuring smooth journeys and vibrant
                    communities, paving the way for a prosperous and interconnected future.
                   </p>
               </div>
               <div class="col-lg-5 col-sm-12 content-pic">
                <img src="{{ asset('images/portfolio_2.jpg') }}" alt="project-2">
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
    <br> --}}
    <div class="container-fluid project" id="project-container-3">
        <div class="container-fluid blur">
           <div class="row content-row card-content">
               <div class="col-lg-5 col-sm-12 content-pic">
                   <img src="{{ asset('images/portfolio_3.jpg') }}" alt="project-3">
               </div>
               <div class="col-lg-7 col-sm-12 content-text">
                   <h3>PROJECT 2 : Road Modernization</h3>
                   <p>
                    Night and Day construction's unwavering commitment to 
                    deadlines is our hallmark. We work tirelessly around the clock,
                    delivering projects on time, every time. Our promise ensures
                    your vision becomes reality, day or night.
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
</section>
@include('include.quote-modal')
@endsection