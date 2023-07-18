<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIMTI - UMT</title>

    {{-- Include Style --}}
    @include('include.style')
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    {{-- Navbar --}}
    <header id="header-section">
        {{-- mengambil tampilan navbar dari folder kerangka kemudian folder layout
            kemudian file navbar.blade.php --}}
        @include('kerangka.layout.navbar')
    </header>

    {{-- Content --}}
    <main>
        {{-- merupakan sebuah kerangka untuk menaruh semua isi content --}}
        @yield('content')
    </main>

    {{-- Footer --}}
    {{-- mengambil tampilan footer dari folder kerangka kemudian folder layout
        kemudian file navbar.blade.php --}}
    @include('kerangka.layout.footer')


    {{-- Include JS --}}
    @include('include.js')
</body>

</html>
