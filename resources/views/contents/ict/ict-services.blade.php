@extends('layout.index')

@section('recaptcha')
    {!! htmlScriptTagJsApi() !!}
@endsection

@section('content')
<section class="ict-service-container">
    <div class="container-fluid portfolio-header">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-sm-12 title-container" >
               <h1 class="fade-in-left">
                BMQ ICT PRODUCTS & SERVICES
               </h1>
               <p class="mt-5 fade-in-right">
                Elevate your business with our cutting-edge ICT solutions, including
                a state-of-the-art Web EOC platform for around the clock Emergency response & preparedness.
               </p>
               <p class=" fade-in-left"> Our expert team delivers tailored services,
                from IT consulting to custom software development, ensuring your
                 business thrives in the dynamic digital landscape.</p>
               <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-end mt-5 fade-in-bottom">
                {{-- <button class="btn btn-lg btn-outline-light"> BUILD WITH US</button> --}}
                </div>
            </div>
            
        </div>
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Connect with Us
                  </button>
            </div>
        </div>
    </div>
</section>
<section class="ict-service-contents">
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
<br>
<br>
<div class="container-fluid ict-service-wrapper">
    <div class="row d-flex align-items-center card-content">
        <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
            <div class="card card-container border-0">
                <img src="{{ asset('images/ict-service/OT.png') }}" alt="" class="ict-service-pic">
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 text-white">
            <h1> OPC Data Historian</h1>
            <ul class="" style="list-style: square">
                <li  class="my-4 ict-service-list">
                    Advance Data Analytics
                </li>
                <li  class="mb-4 ict-service-list">
                    Data Diode
                </li>
            </ul>
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
<div class="container-fluid ict-service-wrapper2 d-flex align-items-center justify-content-evenly">
    <div class="row d-flex align-items-center justify-content-cente p-2 card-content">
        <div class="col-lg-6 col-sm-12 text-dark">
            <h1>ICT PRODUCTS & SOLUTIONS</h1>
           <div class="d-flex card-content">
            <ul class="" style="list-style: square">
                <li  class="mt-4 mb-3 ict-service-list">
                    Wireless Access Point Box
                </li>
                <li  class="mb-3 ict-service-list">
                    Hybrid PBX
                </li>
                <li  class="mb-3 ict-service-list">
                    Cellular Network in a Box
                </li>
                <li  class="mb-3 ict-service-list">
                    Network Performance and 
                    Monitoring System
                </li>
                <li  class="mb-3 ict-service-list">
                    Routers 
                </li>
                <li  class="mb-3 ict-service-list">
                    Network Switches
                </li>
            </ul>
            <ul style="list-style: square">
                <li  class=" mt-4 mb-3 ict-service-list">
                    Bandwidth Manager
                </li>
                <li  class="mb-3 ict-service-list">
                    Broadband Bonding Device
                </li>
                <li  class="mb-3 ict-service-list">
                    SDWan Device
                </li>
                <li  class="mb-3 ict-service-list">
                    Anti Virus
                </li>
                <li  class="mb-3 ict-service-list">
                    Data Cabinets / Rack
                </li>
            </ul>
           </div>
        </div>
        <div class="col-lg-6 col-sm-12 d-flex justify-content-start">
            <div class="card card-container border-0">
                <img src="{{ asset('images/ict-service/ict-product.png') }}" alt="" class="ict-service-pic">
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
<div class="container-fluid project " id="ict-container-2">
    <div class="container-fluid content-home-blur ">
    <div class="row content-row  card-content d-flex justify-content-evenly card-content">
        {{-- <div class="col-lg-5 col-sm-12 home-content-pic1">
            <img src="{{ asset('images/home-content1.jpg') }}" alt="home-content-1">
        </div> --}}
        <div class="col-lg-6 col-md-8 col-sm-12 d-flex justify-content-center flex-column "  id="ict-webeoc">
            <h1 class="text-white">JUVARE Web EOC / E-DIRE</h1>
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
<div class="container-fluid ict-service-wrapper3">
    <div class="row d-flex align-items-center pt-5 card-content ">
        <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
            <div class="card card-container border-0">
                <img src="{{ asset('images/ict-service/cyber.png') }}" alt="" class="ict-service-pic">
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 text-white">
            <h2> CYBERSECURITY SOLUTIONS/SERVICES</h2>
            <ul class="" style="list-style: square">
                <li  class="my-4 ict-service-list">
                    Data Encryption
                </li>
                <li  class="mb-4 ict-service-list">
                    Identity Access Management
                </li>
                <li  class="mb-4 ict-service-list">
                    SOC as Service
                </li> <li  class="mb-4 ict-service-list">
                    Pen Box
                </li> <li  class="mb-4 ict-service-list">
                    Threat Intelligence System
                </li> <li  class="mb-4 ict-service-list">
                    VPN Secure Access
                </li> <li  class="mb-4 ict-service-list">
                    VAPT
                </li>
            </ul>
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

<div class="container-fluid ict-service-wrapper4 d-flex align-items-center justify-content-evenly">
    <div class="row d-flex align-items-center justify-content-cente p-2 card-content">
        <div class="col-lg-6 col-sm-12 text-dark">
            <h1>AUXILIARY POWER </h1>
            <ul class="" style="list-style: square">
                <li  class="mt-4 mb-3 ict-service-list">
                    Hydrogen Power Cell
                </li>
                <li  class="mb-3 ict-service-list">
                    PEM Electrolyzer
                </li>
            </ul>
        </div>
        <div class="col-lg-6 col-sm-12 d-flex justify-content-start">
            <div class="card card-container border-0">
                <img src="{{ asset('images/ict-service/power.png') }}" alt="" class="ict-service-pic">
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
<div class="container-fluid ict-service-wrapper5 d-flex align-items-center justify-content-evenly">
    <div class="row d-flex align-items-center card-content">
        <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
            <div class="card card-container border-0">
                <img src="{{ asset('images/ict-service/software.png') }}" alt="" class="ict-service-pic">
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 text-white">
            <h1>SOFTWARE DEVELOPMENT</h1>
            <ul class="" style="list-style: square">
                <li  class="mt-4 mb-3 ict-service-list">
                    Web & Mobile Application
                </li>
                <li  class="mb-3 ict-service-list">
                    System Develeopment
                </li>
                <li  class="mb-3 ict-service-list">
                    Non-Destructive Testing (NDT)
                </li>
            </ul>
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
</section>

@include('include.quote-modal')
@endsection