<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">

    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/bb3f67b380.js"></script>

    <!--Owl Carousel-->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.theme.default.min.css') }}">

    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>SpotLight on the Word</title>
</head>

<body>
    @include('includes.header')

    @yield('body')
    <!--JQuery-->
    <script src="{{ asset('assets/jquery-3.3.1.min.js') }}"></script>

    <!--Popper-->
    <script src="{{ asset('assets/popper.min.js') }}"></script>

    <!--Bootstrap Javascript-->
    <script src="{{ asset('assets/bootstrap/bootstrap.min.js') }}"></script>

    <!--Custom Javascript-->
    <script src="{{ asset('js/main.js') }}"></script>

    @include('includes.footer')   
    <!--Owl JS-->
    <script src="{{ asset('assets/owlcarousel/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            nav:true,
            autoWidth:true,
            items:1,
            autoplay:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>   
</body>
</html>