@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="/css/fortest.css" />



</head>
<body>
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
                                    <li ><a class="week" href="#">TRENDING:</a></li>
                                    <li><a href="http://rusty.com">KIM KARDASHIAN</a></li>
                                    <li><a href="http://rusty.com">KELLY CLARKSON </a></li>
                                    <li><a href="http://rusty.com">ESSA DUGGAR</a></li>
                                    <li><a href="http://rusty.com">WIN IT</a></li>
                                    <li><a class="week" href="http://rusty.com">SUBSCRIBE </a></li>
                                </ul>
                            </div><!-- end navbar-collapse -->
                        </div><!-- end container-->
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
    @endsection