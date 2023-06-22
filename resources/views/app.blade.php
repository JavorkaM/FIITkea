<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>

    @include('layout.nav')
<!--    MAIN  -->
<main>
    @yield('content')
</main>
<!--    FOOTER  -->
@include('layout.footer-scripts')

</body>
</html>
