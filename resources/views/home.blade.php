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
                                    <li ><a class="week" href="{{url('/')}}">News:</a></li>
                                    <li><a href="http://rusty.com">Transport</a></li>
                                    <li><a href="http://rusty.com">Apartment </a></li>
                                    <li><a href="http://rusty.com">Clothing & footwear</a></li>
                                    <li><a href="http://rusty.com">Toys</a></li>
                                    <li><a href="#">Free</a></li>
                                    <li><a href="#">Animals</a></li>
                                    <button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown">
                                        <span id="search_concept2">Select location</span> <span class=""></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Cherkasy Oblast</a></li>
                                        <li><a href="#">Chernihiv Oblast</a></li>
                                        <li><a href="#">Chernivtsi Oblast</a></li>
                                        <li><a href="#">Dnipropetrovsk Oblast </a></li>
                                        <li><a href="#">Donetsk Oblast</a></li>
                                        <li><a href="#">Ivano-Frankivsk Oblast</a></li>
                                        <li><a href="#">Kharkiv Oblast</a></li>
                                        <li><a href="#">Kherson Oblast </a></li>
                                        <li><a href="#">Khmelnytskyi Oblast  </a></li>
                                        <li><a href="#">Kiev Oblast</a></li>
                                        <li><a href="#">Kirovohrad Oblast</a></li>
                                        <li><a href="#">Luhansk Oblast</a></li>
                                        <li><a href="#">Lviv Oblast </a></li>
                                        <li><a href="#">Mykolaiv Oblast </a></li>
                                        <li><a href="#">Odessa Oblast </a></li>
                                        <li><a href="#">Poltava Oblast </a></li>
                                        <li><a href="#">Rivne Oblast </a></li>
                                        <li><a href="#">Sumy Oblast  </a></li>
                                        <li><a href="#">Ternopil Oblast< </a></li>
                                        <li><a href="#">Vinnytsia Oblast  </a></li>
                                        <li><a href="#">Volyn Oblast< </a></li>
                                        <li><a href="#">Zakarpattia Oblast </a></li>
                                        <li><a href="#">Zaporizhia Oblast </a></li>
                                        <li><a href="#">Zhytomyr Oblast  </a></li>
                                        <li><a href="#">Kryme</a>
                                        <li class="divider"></li>
                                        <li><a href="#all">Anything</a></li>
                                    </ul>
                                    <input type="hidden" name="search_param" value="all" id="search_param">
                                    <li><a class="week" href="{{ url('/userAdv') }}">My shop</a></li>
                                    <li><a class="week" href="{{ url('/create') }}">Start sell </a></li>
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
                        @foreach( $dataAllProd as $returnProdInfo)
                            <div class="panel panel-body">

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                        <strong><span class="text  ">{{$returnProdInfo['name']}}</span></strong>
                                        </div>
                                        <div class="col-sm-3 ">
                                        <strong><span class="text ">{{$returnProdInfo['price']}}₴</span></strong>
                                        </div>

                                        <div class="col-sm-3 pull-right">
                                            <a class="btn btn-primary icon fa-question-circle"  href="{{route('revise-prod',['id'=> $returnProdInfo['id']])}}"> More info</a>
                                        </div>
                                    </div>

                            </div>

                        @endforeach
                    </div>

                    </div>
                    <div class="card-footer">
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
