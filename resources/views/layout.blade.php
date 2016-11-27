<!DOCTYPE html>
<html lang="en">
<head>
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @include('template.style')
</head>

<body class="nav-md">
{{--<header>--}}
    {{--@include('template.header')--}}
{{--</header>--}}

@yield('content')

@include('template.scripts')

{{--<footer class="footer-distributed">--}}
    {{--@include('template.footer')--}}
{{--</footer>--}}
</body>

</html>
