{{--    <!DOCTYPE html>--}}
{{--    <html lang="en">--}}

{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <title>@yield('title', 'DentCare')</title>--}}
{{--        <meta content="width=device-width, initial-scale=1.0" name="viewport">--}}
{{--        <meta content="Free HTML Templates" name="keywords">--}}
{{--        <meta content="Free HTML Templates" name="description">--}}

{{--        <!-- Favicon -->--}}
{{--        <link rel="icon" href="{{asset('asset/img/testimonial-1.jpg')}}" type="image/x-icon">--}}

{{--        <!-- Google Web Fonts -->--}}
{{--        <link rel="preconnect" href="https://fonts.gstatic.com">--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">--}}

{{--        <!-- Icon Font Stylesheet -->--}}
{{--        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">--}}
{{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">--}}

{{--        <!-- Libraries Stylesheet -->--}}
{{--        <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">--}}
{{--        <link href="{{asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">--}}
{{--        <link href="{{asset('asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />--}}
{{--        <link href="{{asset('asset/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />--}}

{{--        <!-- Customized Bootstrap Stylesheet -->--}}
{{--        <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">--}}

{{--        <!-- Template Stylesheet -->--}}
{{--        <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">--}}
{{--    </head>--}}

{{--    <body>--}}



{{--    <!-- Topbar Start -->--}}
{{--    @include('frontLayouts.topbar')--}}
{{--    <!-- Topbar End -->--}}


{{--    <!-- Navbar Start -->--}}
{{--    @include('frontLayouts.header')--}}
{{--    <!-- Navbar End -->--}}


{{--    @yield('content')--}}


{{--    <!-- Footer Start -->--}}
{{--    @include('frontLayouts.footer');--}}
{{--    <!-- Footer End -->--}}


{{--    <!-- Back to Top -->--}}
{{--    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>--}}


{{--    <!-- JavaScript Libraries -->--}}
{{--    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>--}}
{{--    <script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>--}}
{{--    <script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>--}}
{{--    <script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>--}}
{{--    <script src="{{asset('asset/lib/tempusdominus/js/moment.min.js')}}"></script>--}}
{{--    <script src="{{asset('asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>--}}
{{--    <script src="{{asset('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>--}}
{{--    <script src="{{asset('asset/lib/twentytwenty/jquery.event.move.js')}}"></script>--}}
{{--    <script src="{{asset('asset/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>--}}

{{--    <!-- Template Javascript -->--}}
{{--    <script src="{{asset('asset/js/main.js')}}"></script>--}}
{{--    </body>--}}

{{--    </html>--}}


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'hospital')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
@include('frontLayouts.topbar')
<!-- Topbar End -->


<!-- Navbar Start -->
@include('frontLayouts.header')
<!-- Navbar End -->


@yield('content')


<!-- Footer Start -->
@include('frontLayouts.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('asset/js/main.js')}}"></script>
</body>

</html>
