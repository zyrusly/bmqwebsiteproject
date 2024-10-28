@extends('layout.index')

@section('recaptcha')
    {!! htmlScriptTagJsApi() !!}
@endsection

@section('content')
<section class="career-container  min-vh-100">
    <div class="container-fluid ">
        <div class="container-fluid career-wrapper">
            <div class="row d-flex justify-content-evenly mb-5">
               <div class="col-lg-8 col-sm-12 d-flex justify-content-center align-items-start flex-column mr-1 career-intro" >
                    <h1 class="fade-in-left " id="career-h1">
                        Be a part of our organization.
                    </h1>
                    <p class="fade-in-bottom">
                        Together we will blend traditional craftsmanship with cutting-edge technology. 
                        At BMQ, innovation is at our core, and we offer endless 
                        opportunities for growth and development, collaboration with diverse teams,
                        and the chance to work on impactful projects that shape the future. 
                        Explore your potential with us and be part of a dynamic organization that thrives on innovation and excellence.
                    </p>
               </div>
               <div class="col-lg-4 col-sm-12 p-5 rounded bg-light fade-in-top">

                    
                 <form action="{{ route('career.mail') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="d-flex justify-content-center mb-5">
                        <i class="fa-regular fa-paper-plane fa-2xl"></i>
                    </div>

                    @include('include.errors')

                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" name='first_name' class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">*First Name </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" name="last_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">*Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name='contact_number' class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">*Contact Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="position" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">*Position</label>
                    </div>
                    <select class="form-select  mb-3" aria-label="Default select example" name='branch'>
                        <option selected disabled>Select Branch</option>
                        <option value="construction">Construction</option>
                        <option value="ict">ICT</option>
                      </select>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">*Email address</label>
                    </div>
                      <div class="form-floating mb-3">
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="cover_letter" maxlength="300" ></textarea>
                        <label for="floatingPassword">*Cover Letter (300 max)</label>
                      </div>
                      <div class="mb-5">
                        <label for="formFile" class="form-label">*Resume</label>
                        <input class="filepond form-control" type="file" id="formFile" name="attachment">
                      </div>

                      @include('include.recaptcha')

                      <div class="d-grid gap-2">
                        <button type='button' class="btn btn-dark btn-lg" onclick="loadSubmit(this)">Apply Now</button>
                      </div>
                 </form>
            </div>
            <hr>
        </div>
    </div>
</section>
<br>
<br>
<br>
<div class="d-flex justify-content-center">
    <hr class="w-75">
</div>
<br>
<br>
<br>
<section class="career-content  d-flex justify-content-center">
    <div class="container-fluid  career-body d-flex justify-content-center">
        <div class="row card-content">
            <div class="col-lg-6 col-sm-12">
                <div class="card" >
                    <img src="{{ asset('images/career-pic1.jpg') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-lg-6 p-5">
                <h1>PROFESSIONALS</h1>
                    <ul class='list-group list-group-flush' style="list-style: square">
                        <li class="list-group-item mb-3">
                            Civil Engineer
                        </li>
                        <li class="mb-3 list-group-item">
                           Mechanical Engineer
                        </li>
                        <li class="mb-3 list-group-item">
                            Architect
                         </li>
                         <li class="mb-3 list-group-item">
                            Sofware Engineer
                         </li>
                         <li class="mb-3 list-group-item">
                            HR Officer
                         </li>
                    </ul>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<div class="d-flex justify-content-center">
    <hr class="w-75">
</div>
<br>
<br>
<br>
<section class="career-content  d-flex justify-content-center">
    <div class="container-fluid  career-body d-flex justify-content-center">
        <div class="row card-content">
            <div class="col-lg-6 p-5">
                <h1>CONSTRUCTION MANPOWER</h1>
                    <ul class='list-group list-group-flush' style="list-style: square">
                        <li class="list-group-item mb-3">
                           Foreman
                        </li>
                        <li class="mb-3 list-group-item">
                           Safety officer
                        </li>
                        <li class="mb-3 list-group-item">
                            Mason  (Skilled)
                         </li>
                         <li class="mb-3 list-group-item">
                           Carpenter (Skilled) 
                         </li>
                         <li class="mb-3 list-group-item">
                          Electrician (Skilled) 
                         </li>
                         <li class="mb-3 list-group-item">
                            Helper (Labor) 
                          </li>
                    </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="card" >
                    <img src="{{ asset('images/picv2/3-2.jpg') }}" class="card-img-top" alt="..." >
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<div class="d-flex justify-content-center">
    <hr class="w-75">
</div>
<br>
<br>
<br>
@endsection

@section('scripts')
<script>
</script>
@endsection