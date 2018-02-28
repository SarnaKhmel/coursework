@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="form-group row">
                    <div class="col-lg-12">
                        <div class="card card-default">
                                <div class="card-header">
                                    <strong>Write to the manager:</strong>
                                </div>
                                <div class="card-body">
                                    <form method="POST" id="back-write" action="{{ route('back-write') }}">
                                        {{csrf_field()}}
                                    <div class="form-group row">
                                        <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                                        <div class="col-md-10">
                                            <input id="email" name="email" type="email"  >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="message" class="col-md-2 col-form-label text-md-right">Message</label>
                                        <div class="col-md-10">
                                            <textarea id="subscribe" name="subscribe" type="text" ></textarea><br>
                                            <button type="submit" class="pull-right btn btn-success icon fa-send-o"> Send message</button>
                                        </div>
                                    </div>
                                    </form>


                            </div>
                        </div>

                        </div>
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