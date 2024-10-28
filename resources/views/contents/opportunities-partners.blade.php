@extends('layout.index')

@section('recaptcha')
    {!! htmlScriptTagJsApi() !!}
@endsection

@section('content')
<section class="partners-container d-flex align-items-center min-vh-100">
    <div class="container-fluid d-flex align-items-center ">
        <div class="container-fluid career-wrapper">
            <div class="row d-flex justify-content-evenly mb-5">
               <div class="col-lg-8 d-flex justify-content-center align-items-start flex-column px-5 mr-1 career-intro" >
                    <h1 class="fade-in-left">
                        Become a partner.
                    </h1>
                    <p class="fade-in-bottom">
                        Join forces with us. We value the unique skills
                          and experiences you bring to the table. By highlighting your strengths
                           and collaborating with our dynamic team, we can work together to achieve
                            remarkable results. Let's explore the possibilities of this exciting
                             partnership and the potential it holds for both parties.
                    </p>
               </div>
               <div class="col-lg-4 col-sm-12 p-5 rounded bg-light fade-in-top">
                 <form  action="{{ route('partner.mail') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="d-flex justify-content-center mb-5">
                        <i class="fa-regular fa-paper-plane fa-2xl"></i>
                    </div>

                    @include('include.errors')
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="first_name" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">*First Name </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="last_name" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">*Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name='company' id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">*Company</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="position" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">*Position</label>
                    </div>
                    <select class="form-select  mb-3" aria-label="Default select example" name='branch'>
                        <option selected disabled>Select Branch</option>
                        <option value="construction">Construction</option>
                        <option value="ict">ICT</option>
                      </select>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">*Email address</label>
                    </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="subject" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">*Subject</label>
                      </div>
                      <div class="form-floating mb-3">
                        <textarea name="service_offered" class="form-control" id="" cols="30" rows="4"></textarea>
                        <label for="floatingPassword">*Your Product/Services Offered</label>
                      </div>
                      <div class="mb-5">
                        <label for="formFile" class="form-label" name='attachment'>*Company Profile</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>

                      @include('include.recaptcha')

                      <div class="d-grid gap-2">
                        <button class="btn btn-warning btn-lg" type="button" onclick="loadSubmit(this)"><b>SUBMIT YOUR PROFILE</b></button>
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
@endsection