@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">My advertisement:
                        <button class="pull-right icon fa-arrow-circle-right" href="{{ url('/home') }}">To shop</button>
                        <button class="pull-right icon fa-arrow-circle-right" href="{{ url('/create') }}">New adv</button>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-5">
                                <strong>Name</strong>
                            </div>
                            <div class="col-sm-2 ">
                                <strong>Price</strong>
                            </div>
                            <div class="col-sm-2">
                                <strong>Date add</strong>
                            </div>
                            <div class="col-sm-3 pull-right">

                            </div>
                        </div>
                        @foreach( $AllUserAdv as $returnProdInfo)

                                <div class="panel panel-body">

                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <strong><span class="text  ">{{$returnProdInfo['name']}}</span></strong>
                                        </div>
                                        <div class="col-sm-2 ">
                                            <strong><span class="text ">{{$returnProdInfo['price']}}₴</span></strong>
                                        </div>
                                        <div class="col-sm-2">
                                            <strong><span class="text">{{$returnProdInfo['created_at']}}</span></strong>
                                        </div>
                                        <div class="col-sm-3 pull-right">
                                          <a class="btn btn-primary icon fa-ambulance"  href="{{route('edit-prod',['id'=> $returnProdInfo['id']])}}"> More info</a>
                                          <a  class=" btn btn-danger icon fa-remove " href="{{ route('delete-prod', ['id' => $returnProdInfo['id']]) }}">Delete</a>



                                        </div>
                                    </div>
                                </div>

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
        <div class="copyright">
            &copy; Untitled. All rights reserved. Images <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a>
        </div>
    </footer>

    Scripts
    <script src="/resources/assets/js/jquery.min.js"></script>
    <script src="/resources/assets/js/jquery.poptrox.min.js"></script>
    <script src="/resources/assets/js/skel.min.js"></script>
    <script src="/resources/assets/js/util.js"></script>

@endsection()