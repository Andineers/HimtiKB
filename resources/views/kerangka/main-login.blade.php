<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIMTI | UMT</title>

    @include('include.stylelogin')
</head>

<body>
    <header>
        @include('kerangka.layout.navbar-login')
    </header>
    @yield('content')
    @include('kerangka.layout.footer-login')

</body>

</html>
