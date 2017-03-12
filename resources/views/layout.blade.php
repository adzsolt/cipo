<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    window.Laravel =<?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>


</head>
<body>

<div style="background-image:url(/images/images1.jpg);background-size: cover">
<h1 align="center" style="font-size: 40pt">Cipőáruház</h1>

<h2 align="center">Használt és új cipő adás-vétel </h2>
<a class="btn btn-default" href="/adding">Hozzáad</a>
</div>
<hr>

@yield('data')
@yield('content')

</body>
</html>


