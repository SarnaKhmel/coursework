@extends('layouts.app')
@section('content')
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
                                    <input id="name" name="name" type="text" value="{{old('prod')}}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" name="email" type="email" value="{{old('prod')}}">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" name="phone" type="text" value="{{old('prod')}}">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Price</label>

                                <div class="col-md-6">
                                    <input id="price" name="price" type="text" value="{{old('prod')}}">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subscribe" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea id="subscribe" name="subscribe" type="text" value="{{old('prod')}}" ></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="images" class="col-md-4 col-form-label text-md-right">Add photo or link</label>

                                <div class="col-md-6">
                                    <input id="images" type="text" name="images" value="{{old('prod')}}">
                                    <br>
                                    <button class="pull-right" >Add photo</button>
                                </div>
                            </div>

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


@endsection