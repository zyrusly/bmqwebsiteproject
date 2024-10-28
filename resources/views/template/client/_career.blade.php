<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>BMQ Career</title>
</head>
<body>
<div class="d-flex flex-column">
    <div class="w-75 mx-5 mt-5">
        <h5>New Career Appliaction from BMQ Builders website</h5>
    </div>
    <hr>
    <p class="w-75 mx-5 mt-5" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
        <b>Fullname:</b>&nbsp;{{ $data['first_name'] }}&nbsp;{{ $data['last_name'] }}
        <br><br>
        <b>Position:</b>&nbsp;{{ $data['position'] }}
        <br><br>
        <b>Email:</b>&nbsp;{{ $data['email'] }}
        <br><br>
        <b>Contact Number:</b>&nbsp;{{ $data['contact_number'] }}
        <br><br>
        <b>Cover Letter:</b>&nbsp;{{ $data['cover_letter'] }}
    </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>