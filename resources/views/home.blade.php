@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/sidebarOl.css" />

    <!-- Side navigation -->
    <div class="sidenavQQQ  border-radius: 30px;">
        <a href="#about">Realty</a>
        <a href="#services">Cars</a>
        <a href="#clients">Clothes</a>
        <a href="#contact">Electronics</a>
        <a href="#toys">Toys</a>
    </div>

<div class="container">



    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card card-default">
                <div class="card-header">

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="input-group">

                                    <div class="input-group-btn search-panel">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span id="search_concept">Filter by</span> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#contains">Contains </a></li>
                                            <li><a href="#its_equal">It's equal</a></li>
                                            <li><a href="#greather_than">Greather than ></a></li>
                                            <li><a href="#less_than">Less than < </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#all">Anything</a></li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="search_param" value="all" id="search_param">
                                    <input type="text" class="form-control" name="x" placeholder="Search term...">
                                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="icon fa-search"></span></button>
                </span>

                                    <div class="input-group-btn2 search-panel2">
                                <button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown">
                                    <span id="search_concept2">Select location</span> <span class=""></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Cherkasy Oblast <></a></li>
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
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
                <script>
                    $(document).ready(function(e){
                        $('.search-panel .dropdown-menu').find('a').click(function(e) {
                            e.preventDefault();
                            var param = $(this).attr("href").replace("#","");
                            var concept = $(this).text();
                            $('.search-panel span#search_concept').text(concept);
                            $('.input-group #search_param').val(param);
                        });
                    });
                </script>
                <script>
                    $(document).ready(function(e){
                        $('.search-panel2 .dropdown-menu2').find('a').click(function(e) {
                            e.preventDefault();
                            var param = $(this).attr("href").replace("#","");
                            var concept = $(this).text();
                            $('.search-panel2 span#search_concept2').text(concept);
                            $('.input-group2 #search_param').val(param);
                        });
                    });
                </script>






                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
