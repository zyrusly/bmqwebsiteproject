@extends('layout.index')
{{-- LANDING --}}
@section('content')
@include('include.landing')
<div class="home-ict-container">
   <div class="blur-home">
     <br>
        <br>
        <div class="bmq-title-container d-flex justify-content-center card-content">
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
                <span class="bmq-title" style="color: aqua" id="ict-title"><b>ICT SOLUTIONS</b></span>
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
        <div class="container-fluid project" id="ict-container-1">
            <div class="container-fluid blur">
               <div class="row content-row card-content"  id="ict-1st-content">
                   <div class="col-lg-5 col-sm-12 ict-content-pic">
                       <div class="ict-clip">
                        <img src="{{ asset('images/ict-pic1.jpg') }}" alt="ict-1" id="ict-pic1">
                       </div>
                       <div class="ict-clip2">
                        <img src="{{ asset('images/ict-pic3.jpg') }}" alt="ict-1" id="ict-pic1">
                       </div>
                       <div class="ict-clip3">
                        <img src="{{ asset('images/ict-pic4.jpg') }}" alt="ict-1" id="ict-pic1">
                       </div>
                   </div>
                   <div class="col-lg-7 col-sm-12 ict-content-text">
                       <h3>What we do?</h3>
                     <ul style="list-style: square">
                        <li>
                            Provide solutions for an intelligent home and building
                        </li>
                        <li>
                            Provide Web Emergency Operations Center for Disaster Response & Preparedness
                        </li>
                        <li>
                            Provide wireless technology
                        </li>
                        <li>
                            Design & Develop mobile and desktop applications
                        </li>
                        <li>
                            Security management & Technical Support Services
                        </li>
                            
                     </ul>
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
               <div class="row content-row card-contentd-flex, justify-content-center">
                   <div class="col-lg-7 col-sm-12 home-content-text2 ">
                       <h3>Our dedicated team</h3>
                       <p>
                        Our Software Engineers plays a pivotal role in ensuring the smooth and secure operation of
                         an organization's digital infrastructure. 
                         Their expertise in managing networks, systems, '
                         and software is essential for maintaining efficiency 
                         and safeguarding data in today's technology-driven business environment.
                       </p>
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
@include('include.canary')
        <div class="container-fluid project " id="ict-container-2">
            <div class="container-fluid content-home-blur ">
            <div class="row content-row  card-content d-flex justify-content-evenly card-content">
           
                <div class="col-lg-6 col-md-8 col-sm-12 d-flex justify-content-center flex-column "  id="ict-webeoc">
                    <h1 class="text-white">What is Web EOC?</h1>
                    <p class=" text-white">
                        WebEOC is a web-based software platform used by organizations
                        for emergency response and management. It provides tools for information sharing, 
                        resource tracking, real-time communication, situation awareness, 
                        and incident reporting to improve coordination and efficiency during emergencies.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12 d-flex justify-content-end align-items-end">
                    <a href="https://www.juvare.com/" class="btn btn-warning btn-lg "><b class="ict-webeoc-btn  text-wrap text-center" > LEARN MORE</b></a>
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
        <div class="container-fluid project" id="ict-container-1">
            <div class="container-fluid content-home-blur">
            <div class="row content-row card-content">
                {{-- <div class="col-lg-5 col-sm-12 home-content-pic1">
                    <img src="{{ asset('images/home-content1.jpg') }}" alt="home-content-1">
                </div> --}}
                <div class="col-lg-12 col-sm-12 home-content-text3">
                    <h3>Why choose BMQ ICT?</h3>
                    <p>
                        BMQ Builders and Supply Corporation forged a strategic partnership with Eastmarttech Technology Innovators (ETI), an Information Communication Technology company. This collaboration enhances our capabilities by integrating advanced technology solutions into our construction processes.

                        The partnership with ETI Ensures that we stay at the forefront of innovation, offering our clients efficient and cutting-edge solutions.
                    </p>
                        <a href="{{ route('services') }}" class="btn btn-lg btn-warning">Go to Services</a>
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
            <div class="row mt-3 w-100 d-flex justify-content-center">
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                   <a href="https://www.juvare.com/">  <img src="{{ asset('images/partners/juvare.png') }}" alt="juvare"width='200px' height="100px"></a>
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                  <a href="https://www.milesight.com/">  <img src="{{ asset('images/partners/milesight.png') }}" alt="milesight"width='200px' height="100px"></a>
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2">
                    <a href="http://www.cantongt.com/en/"> <img src="{{ asset('images/partners/globaltech.png') }}" alt="global-tech"width='110px' height="100px"></a>
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                    <a href="https://www.hiperwall.com/"><img src="{{ asset('images/partners/hiperwall.webp') }}" alt="hiperwall"width='220px' height="100px"></a>
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                    <a href="https://sg.sharp/"><img src="{{ asset('images/partners/sharp.png') }}" alt="sharp"width='180px' height="100px"></a>
                </div>

                <div class="col-lg-2 col-sm-6 d-flex justify-content-center mt-2 mb-2 card-content">
                    <a href="https://sg.sharp/"><img src="{{ asset('images/canary/canary_logo.svg') }}" alt="sharp"width='180px' height="100px"></a>
                </div>
            </div>
        </div>
        
   </div>
</div>
@endsection