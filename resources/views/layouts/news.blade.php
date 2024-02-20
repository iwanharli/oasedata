<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    {{-- <base href="{{ url('/') }}"> --}}
    @include('partials.meta_head')
</head>

<body class="home-onePage">

    @include('partials.nav')

    {{-- @include('partials.header') --}}

    @yield('content')

    @include('partials.footer')

</body>

</html>
