<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/blog-home')}}" rel="stylesheet">

    <!-- About CSS -->
    @yield('aboutcss')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@include('master.menu')


<div class="container">
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-8">
            @yield('main')
        </div>
        <div class="col-md-4">
            @include('master.find')
            @include('master.category')
            @include('master.widget')
        </div>
    </div>
    <!-- /.row -->
    <hr>
</div>
<!-- /.container -->
@include('master.footer')
<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
