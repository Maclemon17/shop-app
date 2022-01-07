<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('partials._head')

</head>

<body class="@yield('bodyClass')">

    @include('partials._navBar')
    <!-- main content area -->
    @yield('content')

    @include('partials._footer')

    @include('partials._javascripts')
</body>

</html>
