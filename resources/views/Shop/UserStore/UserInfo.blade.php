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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">User information | Change information</div>
                <div class="card-body">
                    @foreach($data as $returnUserInfo)
                        <form method="POST" action="{{route('user-update') }}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$returnUserInfo['id']}}">
                            <div class="form-group row ">
                            <label for="name" class="col-md-4 col-form-label text-md-right" >Name</label>
                            <div class="col-md-6">
                                <input id="name" name="name" type="text" value="{{$returnUserInfo['name']}}">
                            </div> <br>
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" name="email" type="email" value="{{$returnUserInfo['email']}}">
                            </div> <br>
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                            <div class="col-md-6">
                                <input id="phone" name="phone" type="text" value="{{$returnUserInfo['phone_number']}}">
                            </div> <br>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <br>
                                <button type="submit"  class=" btn btn-block btn-primary icon fa-pencil"> Change info </button>
                            </div>
                        </div>
                        </form>
                    @endforeach

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

</body>
@endsection