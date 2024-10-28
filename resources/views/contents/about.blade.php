@extends('layout.index')

@section('content')
<div class="container-fluid min-vh-100 " id="about-container">
    <div class="row d-flex justify-content-center  fade-in-left" >
        <div class="col-lg-5 col-sm-10" id="about-company" >
            <h1 class="bmq-title">BMQ BUILDERS & SUPPLY CORPORATION</h1>
        </div>
        <div class="col-5"></div>

    </div>

    <div class="row mt-5">
        <div class="col-lg-7 col-sm-12 fade-in-left" id="about-sentence-container">
              <div class="row">
                <div class="col-12 space-top" >

                </div>
                <div class="col-sm-12 col-lg-12"  id="about-sentence">
                    <p class="col-sm-12 col-lg-9">
                        <b>BMQ Builders and Supply Corporation </b> is an emerging construction company based in Davao City, Philippines. Established in 2021 under the visionary leadership of <b> Engr. Billy M. Quibod, </b> whose goal and vision are to be one of the most sought-after and trusted companies in the construction and real estate development industry in the Philippines. It is the construction arm of the BMQ Group of Companies based in Davao City, Philippines.
                    </p>
                </div>
                {{-- <div class="col-12 space-bottom">

                </div> --}}
            </div>
        </div>
        <div class="col-lg-5 col-sm-12 fade-in-right" id="company-pic-container">
            <img src="{{ asset('/images/about_pic1.jpg') }}" alt="company photo" class="about-company-pic">
        </div>
    </div>
    <br>
    <div class="row mt-5  card-content">
        <div class="col-lg-5 col-sm-12" id="company-pic-container-2">
            <img src="{{ asset('/images/ict-team.jpg') }}" alt="company photo" class="about-company-pic">
        </div>
        <div class="col-lg-7 col-sm-12" id="about-sentence-container">
              <div class="row">
                <div class="col-12 space-top" >

                </div>
                <div class="col-12"  id="about-sentence">
                    <p>
                        {{-- BMQ Builders and supply corp., is also a provider of Information and Communications Technology (ICT),
                        Operational Technology (OT), Disaster Preparedness & Response (WebEoC) and its security solutions to government and private entities. --}}
                        In 2023 <b>BMQ Builders and Supply Corporation</b> forged a strategic partnership with <b>Eastmarttech Technology Innovators (ETI)</b>, an Information Communication Technology company that provides smart home and building solutions. This collaboration enhances our capabilities by integrating advanced technology solutions
                        into our construction processes. 
                    </p>
                    <p>
                        {{-- With extensive industry experience combined with the best industry-standard practices, BMQ ICT assists its clients in providing technology-based solutions to its daily operational challenges. --}}
                        The partnership with ETI Ensures that we stay at the forefront of innovation, offering our clients efficient and cutting-edge solutions.
                    </p>
                </div>
                <div class="col-12 space-bottom">

                </div>
              </div>
        </div>
    </div>
    <br>
    <br>
    <br>
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
<section class="owner-container">
    <div class="container-fluid owner-wrapper ">
        <div class="row d-flex justify-content-center  card-content">
            <div class="col-lg-7 col-sm-12 d-flex justify-content-center flex-column align-items-center mission-container">
                <h3>Mission</h3>
                <p>
                    To empower communities and businesses 
                    through innovative Construction Solutions and cutting-edge 
                    Information and Communication Technology (ICT) services, 
                    fostering a future where connectivity, efficiency, and 
                    environmental responsibility converge. 
                    
                </p>
                <p>
                    To pioneer a transformative synergy between construction
                    and information technology, we strive to build smart, 
                    sustainable environments that seamlessly integrate the 
                    physical and digital realms
                </p>
                <hr width="60%">
                <br>
                <h3>Vision</h3>
                <p>
                    An innovator in the integration of construction and ICT,
                    redefining the possibilities of the built environment. 
                    We envision a world where our interconnected solutions 
                    harmonize with nature, creating intelligent, strengthen spaces 
                    that enhance the quality of life. 
                </p>
            </div>
            <div class="col-lg-4 col-sm-12 d-flex justify-content-center flex-column align-items-center  mission-container" style="position: relative;">
                <div class="card border-0">
                    <img src="{{ asset('images/bmq_ceo2.jpg') }}" alt="bmq-portrait" id="bmq-portrait">
                </div>
                <div id="portrait-label">
                    <span>
                        <h4>Engr. Billy M. Quibod</h4>
                        <p>CEO BMQ Builders & Supply Corporation</p>
                    </span>

                </div>
            </div>
        </div>
    </div>
</section >
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
<section class="story-container">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center  card-content">
            {{-- <div class="col-lg-7 col-sm-12 d-flex justify-content-start mb-5 card border-0">
                <img src="{{ asset('images/story-pic1.jpg') }}" alt="story-pic" id="story-pic">
            </div> --}}
            <div class="col-lg-6 col-sm-12 d-flex justify-content-center flex-column align-items-center  mission-container">
                <h3>COMMITMENT TO EXCELLENCE </h3>
                <p style="text-align: justify">
                    At BMQ Builders and Supply Corporation, we are dedicated to delivering excellence in every project we undertake. 
                </p>
                <p style="text-align: justify">
                    Our experienced team of professionals, coupled with state-of-the-art equipment and technology, enables us to provide high-quality, sustainable, and cost-effective solutions. We prioritize safety, environmental sustainability, and client satisfaction.
                </p>
                <p style="text-align: justify">
                    Our commitment is to lead the way in shaping a digitally 
                    integrated, sustainable future, where technology and 
                    construction work hand in hand to build a better world for
                    generations to come."
                </p>
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
<br>
<br>
<br>
<br>
<section class="story-container " >

    <div class="container-fluid story-container-bg"  >
        <br>
        <br>
        <br>
        <br>
        <div class="row d-flex justify-content-center  card-content" style="backdrop-filter: blur(7px); color:rgb(240, 248, 188)">
            {{-- <div class="col-lg-7 col-sm-12 d-flex justify-content-start mb-5 card border-0">
                <img src="{{ asset('images/story-pic1.jpg') }}" alt="story-pic" id="story-pic">
            </div> --}}
            <div class="col-lg-6 col-sm-12 d-flex justify-content-center flex-column align-items-center  mission-container">
                <h3>LEGAL COMPLIANCE </h3>
                <p style="font-weight: 400">
                   <b> BMQ Builders and Supply Corporation </b> operates in full compliance with the legal statutes of the Philippines as a 
                        licensed contractor in the <b> Philippine Contractors Accreditation Board (PCAB) </b> as General Engineering / General Building under category B.
                          This PCAB license signifies our commitment to uphold the highest standards in construction practices and regulatory adherence.&nbsp;<i class="fa-solid fa-pen-nib"></i>
                </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
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
@endsection