<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMQ Builders | Error - @yield('code')</title>

    {{-- fonts --}}
    <link rel="icon" href="{{ asset('/images/bmq-logo.webp') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">

    {{-- File --}}
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- local styles --}}
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
</head>
<body>

    {{-- NAVBAR --}}
    @include('include.navbar')
     
    <div class="container-fluid min-vh-100 ">
        <div class="row d-flex justify-content-center  fade-in-left" >
            <div class="col-lg-8 col-sm-12 d-flex justify-content-center align-items-center flex-column mr-1 career-intro" style="margin-top:150px;">
                
                <div class="d-flex justify-content-center">
                    <iframe src="https://lottie.host/embed/fa6f0fd1-061f-404b-b72e-f97985fd8fef/XgP7ggJ65l.json"></iframe>
                </div>

                <h1>@yield('title') | @yield('code')</h1>
                <small class="text-secondary">@yield('message')</small>
                
           </div>
    
        </div>
    </div>

    {{-- footer --}}
    @include('include.footer')
  
</body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/scroll-fade.js') }}"></script>
    <script src="{{ asset('js/goto-title.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            var navbar = $('.nav-container');
                logo_img_b = $('#blue-logo');
                logo_img_w = $('#white-logo');
                
            navbar.addClass('nav-scrolled');
            logo_img_b.css('display', 'none')
            logo_img_w.css('display', 'flex')
        });
    </script>
    
</html>