@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="form-group row">
                            <div class="col-lg-8 col-md-4 col-sm-2 center ">
                                <strong><span>Sorry. Something wrong.</span></strong>
                                <img  src="{{asset('/images/404.png')}}">
                            </div>
                        </div>
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
    <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/jquery.poptrox.min.js"></script>
    <script src="/public/js/skel.min.js"></script>
    <script src="/public/js/util.js"></script>
    <script src="/public/js/main.js"></script>
@endsection