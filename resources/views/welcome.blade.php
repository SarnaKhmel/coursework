@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/fortest.css" />

    <div class="container">


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <form class="navbar-form col-md-3" role="search">
                            <div class="input-group add-on">
                                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container trending">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav trending-menu">
                                        <input type="hidden" name="search_param" value="all" id="search_param">
                                        <li ><a class="week" href="{{url('/home')}}">Shop:</a></li>
                                        <li><a href="#">Transport</a></li>
                                        <li><a href="#">Apartment </a></li>
                                        <li><a href="#">Clothing & footwear</a></li>
                                        <li><a href="#">Toys</a></li>
                                        <li><a href="#">Free</a></li>
                                        <li><a href="#">Animals</a></li>
                                    </ul>
                                </div><!-- end navbar-collapse -->
                            </div><!-- end container-->
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--  ///////////////////////////////////////       -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">

                    </div>

                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
        </div>
        <div class="container">
            <ul class="icons">
                <li><a href="{{route('about')}}"><span class="label">About</span></a></li>
                <li><a href="{{route('faq')}}"><span class="label">FAQ</span></a></li>
                <li><a href="{{route('bay')}}"><span class="label">How To Bay</span></a></li>
                <li><a href="{{route('sell')}}"><span class="label">How To Sell</span></a></li>
            </ul>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/resources/assets/js/jquery.min.js"></script>
    <script src="/resources/assets/js/jquery.poptrox.min.js"></script>
    <script src="/resources/assets/js/skel.min.js"></script>
    <script src="/resources/assets/js/util.js"></script>
    <script src="/resources/assets/js/main.js"></script>
    @endsection()