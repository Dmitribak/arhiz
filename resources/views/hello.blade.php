<!DOCTYPE html>
<html>
{{--Подключение стилей--}}
@yield('head')

<body class="home">
<!-- navbar-->
{{--Login form--}}
@yield('header')
{{--Carusel--}}
@yield('carousel')

{{--Content--}}
@yield('content')

{{--Footer--}}
@yield('footer')
<!-- Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cookie.js') }}"> </script>
<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/front.js') }}"></script>
</body>
</html>