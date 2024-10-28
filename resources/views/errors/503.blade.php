<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "icon" href = "{{ asset('/images/bmq-logo.webp') }}" type = "image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>BMQ Builders and Supply Corp</title>

        <style>
            #main {
                background:-webkit-linear-gradient(170deg, rgba(79, 106, 177, 0.8) 33%, rgba(0, 0, 0, 0.8) 33%), url('/images/construction-site.webp');
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .logo {
                max-width: 70%;
            }

            .social-icons {
                display: flex;
                flex-direction: column;
                align-items: flex-end; /* Align icons vertically centered to the right */
            }

            /* SM */
            @media (min-width: 576px)
            {
                .logo {
                    max-width: 50%;
                }
            }

            /* M */
            @media (min-width: 768px)
            {
                .logo {
                    max-width: 50%;
                }
            }

            /* L */
            @media (min-width: 992px)
            {
                .logo {
                    max-width: 50%;
                }
            }

            /* XL */
            @media (min-width: 1200px) 
            {
                .logo {
                    max-width: 25%;
                }
            }

            /* XXL */
            @media (min-width: 1440px)
            {
                .logo {
                    max-width: 25%;
                }
            }
        </style>

    </head>
    <body class="antialiased" style="font-family: 'Kanit', sans-serif;">
        
        <div class="vh-100 vw-100 row m-0 p-0" id="main">

            <div class="col-7 text-center mb-5">
                <img class="logo" src="{{ asset('/images/bmq-logo.webp') }}">
                
                <div class="mt-2">
                    <h1 style="color:white; font-weight:bolder">Our Website is Coming Soon!</h1>
                    <p style="color:white;">Our exciting new website will launch soon. Come back and check it out.</p>
                    <a class="btn btn-primary" href="mailto:inquiry@bmqbuilders.com">Contact us</a>
                </div>
            </div>

            <div class="col-5 mb-5">
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61550108352845" class="btn btn-dark d-flex justify-content-center align-items-center my-2 me-2" style="border-radius: 50%; height:50px; width:50px;">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-dark d-flex justify-content-center align-items-center my-2 me-2" style="border-radius: 50%; height:50px; width:50px;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-dark d-flex justify-content-center align-items-center my-2 me-2" style="border-radius: 50%; height:50px; width:50px;">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    </body>
</html>
