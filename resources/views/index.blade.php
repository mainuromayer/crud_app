<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple App</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/toastify.min.css')}}">


    <link href="{{asset('/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('/js/jquery-3.7.0.min.js')}}"></script>

    <script src="{{asset('/js/config.js')}}"></script>
    <script src="{{asset('/js/toastify.min.js')}}"></script>
    <script src="{{asset('/js/axios.min.js')}}"></script>
</head>
<body class="hold-transition sidebar-mini">


<div class="wrapper">
    <!-- Navbar Start -->
    @include('partial.navbar')
    <!-- Navbar End -->

    <!-- Main Sidebar Container Start -->
    @include('partial.sidebar')
    <!-- Main Sidebar Container End -->

    <!-- Content Wrapper Start -->
    @yield('content-wrapper')
    <!-- Content Wrapper End -->

    <!-- Footer Start -->
        @include('partial.footer')
    <!-- Footer End -->k
</div>



<script src="{{asset('/js/script.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
