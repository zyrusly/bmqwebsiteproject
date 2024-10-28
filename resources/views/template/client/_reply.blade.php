<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="container-fluid ">
    <div class="row mx-5 mt-5 mb-2">
       <div class="col-lg-12 d-flex justify-content-start">
            <h6>Hello! {{ $data['first_name'] }}&nbsp;{{ $data['last_name'] }},</h6>
       </div>
    </div>
    <div class="row mx-5">
        <div class="col-lg-12 d-flex justify-content-start">
            <p>Thank you! for reaching out and showing interest to our company, We will reach out you shortly.</p>
       </div>
       <div class="col-lg-12 d-flex justify-content-start">
        <p>BMQ Buiiders & Supply Corporation,</p>
        </div>
       <div class="col-lg-12 d-flex justify-content-start mt-5">
        <p style="font-size: 10px">This message is Automated.</p>
        </div>
     </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>