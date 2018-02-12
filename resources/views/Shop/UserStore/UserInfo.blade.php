@extends('layouts.app')

@section('content')

        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/main.css" />

</head>
<body>
<style>
    html, body
    {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<!-- Main -->
<section id="main">
    <div class="inner">

        <!-- One -->
        <section id="one" class="wrapper style1">
            <div class="content">


                <div class="header">
                    <h1>User information:</h1>
                </div>
                <div class="content">

                    @foreach($data as $returnUserInfo)

                        <div class="panel panel-body">
                            <li id="{{$returnUserInfo["id"]}}" >
                                <div class="col-md-offset-1 ">
                                    <div class="title"><strong>User name: <span class="text">{{$returnUserInfo['name']}}</span></strong></div>
                                    <div class="description">User email: <span class="text"> {{$returnUserInfo['email']}}</span></div>
                                    <div class="user">User numder: <span class="text"> {{$returnUserInfo['phone_number']}}</span> </div>
                                </div>
                            </li>

                        </div>

                    @endforeach
                    <button type="button" class="btn btn-primary btn-block">Сhange information</button>

                </div>
            </div>
            <div class="content">

            </div>
        </section>
        <!-- Two -->
        <section id="two" class="wrapper ">
            <header>

            </header>
            <div class="content">
                <div class="gallery">

                </div>
            </div>
        </section>
        <!-- Three -->
        <section id="two" class="wrapper style2">
            <a href="{{ url('/addAdvertisement') }}">
                <button type="button" class="btn btn-primary btn-block">Add advertisement</button>
            </a>
            <div class="content">
                <div class="gallery">

                </div>
            </div>
        </section>

        <!--Three-->
        <section id="three" class="wrapper style2">
            <header>
                <button type="button" class="btn btn-primary btn-block">My advertisement</button>
            </header>
            <div class="content">
                <div class="gallery">

                </div>
            </div>



        </section>

    </div>
</section>

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
    <div class="copyright">
        &copy; Untitled. All rights reserved. Images <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a>
    </div>
</footer>

<!-- Scripts -->
<script src="/resources/assets/js/jquery.min.js"></script>
<script src="/resources/assets/js/jquery.poptrox.min.js"></script>
<script src="/resources/assets/js/skel.min.js"></script>
<script src="/resources/assets/js/util.js"></script>
<script src="/resources/assets/js/main.js"></script>

</body>
@endsection