<html>
<head>
    <meta charset="UTF-8">
    <title>Cipoaruhaz</title>
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">

</head>
<body>
<h1 align="center" style="font-size: 40pt">Cipőáruház</h1>
<h2 align="center">Használt és új cipő adás-vétel  </h2>
<div style="padding-top: 100px">
        <div class="col-sm-6" align="center" >
            <form action="/" method="post">
                <button type="submit" class="btn btn-warning">Eladás</button>
            </form>
            </div>
        <div class="col-sm-6" align="center">
            <form action="/shoes">
                <button type="submit" class="btn btn-success ">Vásárlás</button>
            </form>
        </div>
</div>
</body>
</html>