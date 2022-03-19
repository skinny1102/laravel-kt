<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/templatecss/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/font.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/li-scroller.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/slick.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/jquery.fancybox.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/theme.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatecss/details-product.css')}}">
</head>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
@include('user.header')
    @yield('content')

@include('user.footer')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script text="text/javascript" src="{{asset('js/templatejs/jquery.min.js')}}"></script>  
<script text="text/javascript" src="{{asset('js/templatejs/wow.min.js')}}"></script>  
<script text="text/javascript" src="{{asset('js/templatejs/bootstrap.min.js')}}"></script>  
<script text="text/javascript" src="{{asset('js/templatejs/slick.min.js')}}"></script>  
<script text="text/javascript" src="{{asset('js/templatejs/jquery.li-scroller.1.0.js')}}"></script>  
<script text="text/javascript" src="{{asset('js/templatejs/jquery.newsTicker.min.js')}}"></script> 
<script text="text/javascript" src="{{asset('js/templatejs/jquery.fancybox.pack.js')}}"></script> 
<script text="text/javascript" src="{{asset('js/templatejs/custom.js')}}"></script> 
</body>
</html>