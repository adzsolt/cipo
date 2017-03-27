<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
<script>
    window.Laravel =<?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>


</head>
<body>
<div id="head">
<navb></navb>
<div style="background-image:url(/images/images1.jpg);background-size: cover">
<h1 align="center" style="font-size: 40pt">Cipőáruház</h1>
<h2 align="center">Használt és új cipő adás-vétel </h2>
</div>
<hr>
</div>
{{--<script src="/js/app.js"></script>--}}
@yield('data')
@yield('content')

</body>
</html>


