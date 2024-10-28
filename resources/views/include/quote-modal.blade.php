<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">We are at your service!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('quote.mail') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body mx-5">
            @method('POST')
            @csrf
            @if($errors->any())
            {!! implode('', $errors->all('<div class="alert alert-danger alert-dismissible">:message</div>')) !!}
            @endif
            <div class="d-flex justify-content-center mb-5">
                <p style="font-size: 1.5rem">Fill out the form and submit so we can assess your needs</p>
            </div>
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
            @if(Route::current()->getName() == 'services')
            <input type="hidden" name='branch' value="construction">
            @else
            <input type="hidden" name='branch' value="ict">
            @endif
            <div class="form-floating mb-3">
                <input type="text" name='company' class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">*Company</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="position" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">*Position</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">*Email address</label>
            </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" id="textAreaExample1" rows="4" name="scope" maxlength="300" ></textarea>
                <label for="floatingPassword">*Scope (300 max)</label>
              </div>
              <div class="mb-5">
                <label for="formFile" class="form-label">*Attachment</label>
                <input class="form-control" type="file" id="formFile" name="attachment">
              </div>

              @include('include.recaptcha')
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark px-3" onclick="loadSubmit(this)">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>