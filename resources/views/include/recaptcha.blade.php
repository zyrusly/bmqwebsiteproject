<div class="mb-5">
    {!! htmlFormSnippet() !!}

    @if($errors->has('g-recaptcha-response'))

        <div class="mt-2">
            <small class="text-danger">{{$errors->first('g-recaptcha-response')}}</small>
        </div>

    @endif
</div>