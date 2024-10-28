@if($errors->any())
    <ul class="my-2">
        @foreach ($errors->all() as $error)
            <li class="text-danger">{{$error}}</li>
        @endforeach
    </ul>
@endif