@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/fortest.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <style>
        .mySlides {display:none;}
    </style>

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


                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown">
                                            <a class="btn b nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                @lang('localization.Category') <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                                @foreach( $dataAllCategory as $Category)

                                                    <a class="icon fa dropdown-item" href="{{route('filter-category', ['id' => $Category['id']])}}">
                                                        <span class="text" >{{$Category['category']}}</span>
                                                    </a>

                                                @endforeach()
                                            </div>
                                        </li>
                                    </ul>


                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown">
                                            <a class="btn b nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                @lang('localization.Category') <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                                <a href="#">Cherkasy Oblast</a> <br>
                                                <a href="#">Chernihiv Oblast</a> <br>
                                                <a href="#">Chernivtsi Oblast</a>
                                                <a href="#">Dnipropetrovsk Oblast </a>
                                                <a href="#">Donetsk Oblast</a>
                                                <a href="#">Ivano-Frankivsk Oblast</a>
                                                <a href="#">Kharkiv Oblast</a>
                                                <a href="#">Kherson Oblast </a>
                                                <a href="#">Khmelnytskyi Oblast  </a>
                                                <a href="#"><strong>Kiev Oblast</strong></a>
                                                <a href="#">Kirovohrad Oblast</a>
                                                <a href="#">Luhansk Oblast</a>
                                                <a href="#">Lviv Oblast </a>
                                                <a href="#">Mykolaiv Oblast </a>
                                                <a href="#">Odessa Oblast </a>
                                                <a href="#">Poltava Oblast </a>
                                                <a href="#">Rivne Oblast </a>
                                                <a href="#">Sumy Oblast  </a>
                                                <a href="#">Ternopil Oblast< </a>
                                                <a href="#">Vinnytsia Oblast  </a>
                                                <a href="#">Volyn Oblast< </a>
                                                <a href="#">Zakarpattia Oblast </a>
                                                <a href="#">Zaporizhia Oblast </a>
                                                <a href="#">Zhytomyr Oblast  </a>
                                                <a href="#">Kryme</a>

                                            </div>
                                        </li>
                                    </ul>




                                </ul>
                            </div>
                        </div>
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
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <strong><span>@lang('localization.image')</span></strong>
                            </div>
                            <div class="col-sm-3">
                                <strong><span class="text  ">@lang('localization.nameProd')</span></strong>
                            </div>
                            <div class="col-sm-3 ">
                                <strong><span class="text ">@lang('localization.price') ₴</span></strong>
                            </div>

                            <div class="col-sm-2 pull-right">

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @foreach( $dataAllProd as $key => $returnProdInfo)
                            <div class="panel panel-body">

                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                         <span class="image">
                                             <div class="w3-content w3-section" style="max-width:500px">
                                                  @foreach( json_decode($returnProdInfo['images']) as $image)
                                                   <div>
                                                       <ul>
                                                           <img class="mySlides-{{$key}}" src="{{asset('/pictures/'.$image)}}" style="max-width: 150px">
                                                       </ul>
                                                   </div>
                                                  @endforeach
                                             </div>

                                               </span>
                                        </div>
                                        <div class="col-sm-3">
                                        <strong><span class="text  ">{{$returnProdInfo['name']}}</span></strong>
                                        </div>
                                        <div class="col-sm-3 ">
                                        <strong><span class="text ">{{$returnProdInfo['price']}}₴</span></strong>
                                        </div>
                                        <div class="col-sm-2 pull-right">
                                            <a class="btn btn-primary icon fa-question-circle"  href="{{route('revise-prod',['id'=> $returnProdInfo['id']])}}"> More info</a>
                                        </div>
                                    </div>

                            </div>

                        @endforeach
                            <script>
                                var myIndex = 0;
                                carousel();

                                function carousel() {
                                    var i;
                                    var x = document.getElementsByClassName("mySlides-0");
                                    for (i = 0; i < x.length; i++) {
                                        x[i].style.display = "none";
                                    }
                                    myIndex++;
                                    if (myIndex > x.length) {myIndex = 1}
                                    x[myIndex-1].style.display = "block";
                                    setTimeout(carousel, 2500);
                                }
                            </script>
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
                <li><a href="{{route('about')}}"><span class="label">   @lang('localiation.about')</span></a></li>
                <li><a href="{{route('faq')}}"><span class="label">     @lang('localization.FAQ')</span></a></li>
                <li><a href="{{route('bay')}}"><span class="label">     @lang('localization.HowToBay')</span></a></li>
                <li><a href="{{route('sell')}}"><span class="label">    @lang('localization.HowToSell')</span></a></li>
            </ul>
        </div>
    </footer>
    <!-- Scripts -->
    <script>
        $('.fade').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    </script>
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>--}}
    {{--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>--}}
    {{--<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>--}}

@endsection()
