<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
    {{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css">--}}
    {{--<link rel="stylesheet" href="/public/css/basic.css"/>--}}
    <link rel="stylesheet" href="/css/jquery.filer.css"/>
    <link rel="stylesheet" href="/css/jquery.filer-dragdropbox-theme.css"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Laravel Telegram Chat Bot Tutorial and Live Demo. Send messages from browser to Telegram group.">

    <meta property="fb:app_id" content="356607781215457" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Laravel Telegram Chat Bot Live Demo | Codingo Tuts">
    <meta property="og:description" content="Laravel Telegram Chat Bot Tutorial and Live Demo. Send messages from browser to Telegram group.">
    <meta property="og:url" content="https://demo2.codingo.me/">
    <meta property="og:image" content="https://tuts.codingo.me/wp-content/uploads/2015/07/telegram-messenger-800x405.jpg">
    <meta property="og:site_name" content="Codingo Demo">
    <meta property="og:image:type" content="image/png">
    <meta property="article:author" content="https://www.facebook.com/ivanradunovic" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- my castom style-->
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/main.css" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    SarnaShop
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>





                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="btn b nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('localization.language') <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="icon fa dropdown-item" href="{{ route('change-lang', ['lang' => 'en' ]) }}"> @lang('localization.en') </a>
                                <a class="icon fa dropdown-item" href="{{ route('change-lang', ['lang' => 'uk' ]) }}"> @lang('localization.uk') </a>
                                <a class="icon fa dropdown-item" href="{{ route('change-lang', ['lang' => 'pl' ]) }}"> @lang('localization.pl') </a>
                                <a class="icon fa dropdown-item" href="{{ route('change-lang', ['lang' => 'ru' ]) }}"> @lang('localization.ru') </a>
                            </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">

               <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{route('create')}}">@lang('localization.createNew')</a>
                                   <a class="dropdown-item" href="{{route('userAdv')}}">@lang('localization.MyAdv')</a>
                                   <a class="dropdown-item" href="{{route('user')}}">@lang('localizatio n.Profile')</a>
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('localization.logout')
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- my castom style-->
    <style>
        html, body
        {
            height: 100%; !important;
            margin: 0; !important;
            padding: 0; !important;

        }
    </style>
    <!-- Scripts -->
    <script>
        (function () {
            'use strict';

            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                    document.createTextNode(
                        '@-ms-viewport{width:auto!important}'
                    )
                )
                document.querySelector('head').appendChild(msViewportStyle)
            }

        })();
    </script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>--}}

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.poptrox.min.js') }}"></script>
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/jquery.filer.js') }}"></script>
{{--    <script src="{{ asset('js/slick_my.js') }}"></script>--}}
    <script src="{{ asset('js/main.js') }}"></script>

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>--}}
</body>
</html>
