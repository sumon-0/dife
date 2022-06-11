<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- meta charset -->
    <meta charset="utf-8">
    <!-- site title -->
    <title>DIFE | OSH ই-টুল</title>
    <!-- meta description -->
    <meta name="description" content="">
    <!-- mobile viwport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fevicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- ================================
    CSS Files
    ================================= -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/themefisher-fonts.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link id="color-changer" rel="stylesheet" href="{{asset('frontend/css/colors/color-0.css')}}">
    <style>
        header{
            width: 100%;
            background:black;




        }

        header ul{
            display: flex;
            justify-content: flex-end;
            max-width: 1000px;
            margin:0 auto;
            padding: auto;

        }

        header ul li{

            list-style: none;
            position: relative;
            padding: 10px 15px;
            transition: 0.5s;
            box-sizing: border-box;
        }

        header ul li :hover{
            background:black;
        }

        header ul li a{
            color: white;
        }
    </style>
</head>

<body>

<div class="preloader">
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
</div>


<main class="site-wrapper">
    <div class="overlay"></div>
    <header>



        <ul>
            <li><a href="/">হোম</a></li>
            <li><a href="">উদ্ভাবন পরিচিতি</a></li>
            <li><a href="">উদ্ভাবক পরিচিতি</a></li>


        </ul>

    </header>
@yield('content')


</main> <!-- /.site-wrapper -->

<!-- ================================
JavaScript Libraries
================================= -->
<script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-validation.min.js')}}"></script>
<script src="{{asset('frontend/js/form.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>