@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="/css/input.css" />
    <link rel="stylesheet" href="/css/fortest.css" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Add new product
                        <button class="pull-right icon fa-arrow-circle-right" href="{{ url('/home') }}">To shop</button>
                        <button class="pull-right icon fa-arrow-circle-right" href="{{ url('/create') }}">New adv</button>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product-save') }}">
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" name="name" type="text"  >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" name="email" type="email" >

                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" name="phone" type="text" >

                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Price</label>

                                <div class="col-md-6">
                                    <input id="price" name="price" type="text" >

                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="subscribe" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea id="subscribe" name="subscribe" type="text"></textarea>
                                </div>
                            </div>
                                <br>

                            <div class="form-group row">
                                <label for="images" class="  col-md-4 col-form-label text-md-right">Add photo</label>

                                <div class=" row col-md-6">
                                     <label class="files-label">
                                        <input type="file" class=" btn btn-primary btn-block pull-right" name="images" multiple>
                                        <span>Drop files</span>
                                    </label>
                                    <br/>
                                </div>
                            </div>
<br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        Add new product
                                    </button>
                                </div>
                            </div>
                        </form>
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

@endsection