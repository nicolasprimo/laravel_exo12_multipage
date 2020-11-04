<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include("partials/header")
    @yield("contain")
    @yield("about")
    @yield("products")
    @yield("store")
    @include("partials/footer")
    <script  src="{{asset('js/app.js')}}"></script>
</body>
</html>