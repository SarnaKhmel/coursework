@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="form-group row">
                    <div class="col-lg-8">
                        <div class="card card-default">
<!--Product-->
                            <div class="card-header">
                                Product info:
                            </div>
                            <div class="card-body">


                            </div>
                        </div><br>
<!--Message-->
                        <div class="card card-default">
                            <div class="card-header">
                                Write to the seller:
                            </div>
                            <div class="card-body">

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
<!--Info-->
                    <div class=" pull-right col-lg-4">
                        <div class="card card-default">
                            <div class="card-header">
                                Seller info:
                            </div>
                            <div class="card-body">

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
        <script src="/resources/assets/js/jquery.min.js"></script>
        <script src="/resources/assets/js/jquery.poptrox.min.js"></script>
        <script src="/resources/assets/js/skel.min.js"></script>
        <script src="/resources/assets/js/util.js"></script>
        <script src="/resources/assets/js/main.js"></script>
    @endsection()