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
    <link rel="stylesheet" type="text/css" href="../resources/assets/css/app.css">
</head>

<body>
<header>
    @include('template.header')
</header>

<div id="container">
    @yield('content')
</div>

<footer>
    @include('template.footer')
</footer>
</body>

</html>
