@extends('layout.index')
{{-- LANDING --}}

@section('content')
@include('include.landing')
<div class="home-construction-container">
   <div class="blur-home">
     <br>
        <br>
        <div class="bmq-title-container d-flex justify-content-center card-content ">
                <div class="" style="border-bottom: 4px solid #031634; width:40%">
                </div>
                <div class=" d-flex justify-content-center "  style="width:20%">
                    <span class="bmq-title"><b>B&nbsp;&nbsp;M&nbsp;&nbsp;Q</b></span>
                </div>
                <div class=""  style="border-bottom: 4px solid #031634; width:40%">
                </div>
        </div>
        <div class="bmq-title-container d-flex justify-content-center">
            <div class=" d-flex justify-content-center">
                <span class="bmq-title" id="bmq-title"><b>CONSTRUCTION</b></span>
            </div>
        </div>
       
        

        {{-- --------------------------------------------------- BREAK --------------------------------------------------- --}}
        <br>
        <br>
        <br>
        <br>
        {{-- ------------------------------------------------- END BREAK ------------------------------------------------------ --}}
        <br>
        <br>
        <br>
        <div class="container-fluid project" id="home-container-1">
            <div class="container-fluid content-home-blur">
            <div class="row home-content-row card-content">
                <div class="col-lg-5 col-sm-12 home-content-pic1">
                    <img src="{{ asset('images/picv2/7.jpg') }}" alt="home-content-1">
                </div>
                <div class="col-lg-7 col-sm-12 home-content-text1">
                    <h3>BMQ Construction</h3>
                    <p>
                         BMQ Builders and Supply Corporation is an emerging construction company based in Davao City, Philippines. Established in 2021 under the visionary leadership of <b> Engr. Billy M. Quibod, </b> whose goal and vision are to be one of the most sought-after and trusted companies in the construction and real estate development industry in the Philippines. It is the construction arm of the BMQ Group of Companies based in Davao City, Philippines.
                    </p>
                    <p>
                        We specializes in a comprehensive range of construction services, catering both commercial and residential needs.
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
        <div class="container-fluid project" id="home-container-2">
            <div class="container-fluid content-home-blur">
               <div class="row content-row card-content">
                   <div class="col-lg-7 col-sm-12 home-content-text2 ">
                       {{-- <h3>Our dedicated team</h3> --}}
                       <h3>  At BMQ Builders and Supply Corporation</h3>
                       <p>
                        {{-- Our construction team brings expertise, precision, and reliability to every project. With a proven track record of delivering exceptional results, we're your trusted partner for successful construction endeavors. --}}
                            We are dedicated to delivering -excellence in every project we undertake. <br>
                            Our experienced team of professionals, coupled with state of the art equipment and Technology, enables us to provide high-quality,
                            and sustainable and cost-effective solutions. We prioritize safety, environmental sustainability and client satisfaction.
                       </p>
                   </div>
                   <div class="col-lg-5 col-sm-12 content-pic">
                    {{-- <img src="{{ asset('images/picv2/13.jpg') }}" class="" style='width:100%' height="315px" alt="..."> --}}
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('images/employees.jpg') }}" class="d-block w-100" alt="..." height="330px">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('images/employees1.jpg') }}" class="d-block w-100" alt="..." height="330px">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('images/employees2.jpg') }}" class="d-block w-100" alt="..." height="330px">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('images/picv2/13.jpg') }}" class="d-block w-100" alt="..." height="330px">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                   </div>
               </div>
            </div>
        </div>
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
        <div class="container-fluid project" id="home-container-1">
            <div class="container-fluid content-home-blur">
            <div class="row content-row card-content">
                {{-- <div class="col-lg-5 col-sm-12 home-content-pic1">
                    <img src="{{ asset('images/home-content1.jpg') }}" alt="home-content-1">
                </div> --}}
                <div class="col-lg-12 col-sm-12 home-content-text3">
                    <h3>Why BMQ Builders & Supply Corp.?</h3>
                    <p>
                        BMQ Builders and Supply Corporation operates in full compliance with the legal statutes of the Philippines as a 
                        licensed contractor in the <b> Philippine Contractors Accreditation Board (PCAB) </b> as General Engineering / General Building under category B.
                          This PCAB license signifies our commitment to uphold the highest standards in construction practices and regulatory adherence.
                    </p>
                        <a href="{{ route('services') }}" class="btn btn-lg btn-warning"> Build With Us </a>
                </div>
            </div>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center" style="background: white">
            <div class="row mt-3 w-100">
                <div class="col-lg-12 col-sm-12 d-flex justify-content-center mt-2 mb-2">
                   <h4><b>PARTNERS</b></h4>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center" style="background: white">
            <div class="row mt-3 w-100">
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                    <img src="{{ asset('images/partners/Albea Auto Parts.png') }}" alt="albea auto parts"width='150px' height="100px">
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                    <img src="{{ asset('images/partners/Davao Gold Star HardWare.png') }}" alt="davao goldstar hardware"width='110px' height="100px">
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 ">
                    <img src="{{ asset('images/partners/Davao Golden Hardware.jpg') }}" alt="davao golden hardware"width='110px' height="100px">
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2">
                    <img src="{{ asset('images/partners/Davao Joni Auto Supply Corp.jpg') }}" alt="davao joni auto supply corp"width='110px' height="100px">
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                    <img src="{{ asset('images/partners/Power Up.png') }}" alt="power up"width='150px' height="100px">
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                    <img src="{{ asset('images/partners/weld industrial.jpg') }}" alt="weld industrial"width='110px' height="100px">
                </div>
            </div>
        </div>
        
   </div>
</div>
@endsection