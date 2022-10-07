<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('metaTitle')</title>
</head>
<body>
{{-- header --}}
@include('header')
    <main>
        @include('jumbo')
        {{-- jumbo --}}
        @yield('card')
        @include('content')
    </main>
{{-- footer --}}
@include('footer')
</body>
</html>