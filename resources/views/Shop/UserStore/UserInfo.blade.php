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
                <div class="card-header">User information</div>
                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Change information</div>
                <div class="card-body">
                    @foreach($dataEdit as $edit)
                            <div class="form-group row ">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$edit['name']}}">
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" value="{{$edit['email']}}">
                            </div>
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" value="{{$edit['phone']}}">
                            </div>
                        </div>
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a  class=" btn btn-danger icon fa-remove " href="{{ route('user-update', ['id' => $edit['id']]) }}">Delete</a>
                    @endforeach()
                                <button type="submit" class="btn btn-block btn-primary">
                                    Change info
                                </button>
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