<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @include('template.style')
</head>

<body>
<header>
    @include('template.header')
</header>

<div class="nav-md">
    @yield('content')
</div>

@yield('scripts')

<footer class="footer-distributed">
    @include('template.footer')
</footer>
</body>

</html>
