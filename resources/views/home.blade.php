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
                                    <li ><a class="week" href="#">News:</a></li>
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
                                        <div class="col-lg-6">
                                        <strong><span class="text  ">{{$returnProdInfo['name']}}</span></strong>
                                        </div>
                                        <div class="col-sm-4 ">
                                        <strong><span class="text ">{{$returnProdInfo['price']}}₴</span></strong>
                                        </div>
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-2 pull-right">
                                            <button type="button" class="card pull-right">More info</button>
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



    <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/jquery.poptrox.min.js"></script>
    <script src="/public/js/skel.min.js"></script>
    <script src="/public/js/util.js"></script>
    <script src="/public/js/main.js"></script>
    <script src="/public/js/menuScript.js/"></script>

 @endsection()
