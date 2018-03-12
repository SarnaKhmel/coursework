@extends('layouts.app')
@section('content')
    {{--<link rel="stylesheet" href="/css/lazy-load.css" />--}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="form-group row">
                    <div class="col-lg-8">
                        <div class="card card-default">
    <!--Product-->
                            @foreach( $dataAdv as $prod)
                            <div class="card-header">
                               <strong>Product info:{{$prod['name']}}</strong>
                            </div>

                            <div class="card-body">
                                <div class="ct-header ct-header--slider ct-slick-custom-dots" id="home">
                                    <div class="ct-slick-homepage" data-arrows="true" data-autoplay="true">
                                        <div class="w3-content w3-display-container">
                                        @foreach( json_decode($prod['images']) as $image)
                                                 <div class="slick-my-img slick-list draggable">

                                                     <img class="mySlides" src="{{asset('/pictures/'.$image)}}" style="max-width: 700px">
                                                     <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                                     <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                                                 </div>
                                    @endforeach
                                        </div>

                                        <script>
                                            var slideIndex = 1;
                                            showDivs(slideIndex);

                                            function plusDivs(n) {
                                                showDivs(slideIndex += n);
                                            }

                                            function showDivs(n) {
                                                var i;
                                                var x = document.getElementsByClassName("mySlides");
                                                if (n > x.length) {slideIndex = 1}
                                                if (n < 1) {slideIndex = x.length}
                                                for (i = 0; i < x.length; i++) {
                                                    x[i].style.display = "none";
                                                }
                                                x[slideIndex-1].style.display = "block";
                                            }
                                        </script>
                                        <div><hr><strong>@lang('localization.Subscribe')</strong>
                                            <div class="clr">
                                                {{$prod['subscribe']}}
                                            </div>
                                        </div>
                                        <div>
                                            <hr>
                                        </div>

                               </div>
                             </div>


                                @endforeach

                            </div>
                        </div><br>
<!--Message-->
                        <div class="card card-default">
                            <div class="card-header">
                                Write to the seller:
                            </div>
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="message" class="col-md-2 col-form-label text-md-right">@lang('localization.Message')</label>
                                    <div class="col-md-10">
                                        <textarea id="subscribe" name="subscribe" type="text" ></textarea><br>
                                        <button type="submit" class="pull-right btn btn-success icon fa-send-o"> @lang('localization.Send message')</button>
                                    </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!--Info-->
                    <div class=" pull-right col-lg-4">
                        <div class="card card-default">
                            <div class="card-header">
                                Seller info:
                            </div>
                            <div class="card-body">
                            @foreach( $dataUser as $data)
                                     <div class="col-md-8">
                                         <div class="clr">
                                            {{-- <strong>{{$data('name')}}</strong>--}}
                                         </div>
                                         <div class="clr">
                                             {{--<strong>{{$date('phone_number')}}</strong>--}}
                                         </div>
                                         <hr>
                                         <div class="clr">
                                             {{$data['email']}}
                                         </div>
                                     </div>
                                @endforeach
                            </div>
                        </div><br>
<!--Other adv-->
                        <div class="card card-default">
                            <div class="card-header">
                                Seller`s adv:
                            </div>
                            <div class="card-body">

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

    {{--<script src="{{ asset('js/lazy-load.js') }}"></script>--}}


@endsection()