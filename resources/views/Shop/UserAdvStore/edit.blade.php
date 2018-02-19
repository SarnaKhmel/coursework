@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Edit advertisement:
                        <button class="pull-right icon fa-arrow-circle-right" href="{{ url('/home') }}">To shop</button>
                        <button class="pull-right icon fa-arrow-circle-right" href="{{ url('/create') }}">New adv</button>
                    </div>
                    @foreach( $dataEdit as $edit)
                        <form method="POST" action="{{route('product-update') }}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$edit['id']}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" name="name" type="text" value="{{$edit['name']}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" name="email" type="email" value="{{$edit['prodEmail']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-6">
                                    <input id="phone" name="phone" type="text" value="{{$edit['phone']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Price</label>
                                <div class="col-md-6">
                                    <input id="price" name="price" type="text" value="{{$edit['price']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subscribe" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <textarea id="subscribe" name="subscribe" type="text">{{$edit['subscribe']}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="images" class="col-md-4 col-form-label text-md-right">Add photo or link</label>
                                <div class="col-md-6">
                                    <input id="images" type="text" name="images" value="{{$edit['image']}}">
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
                        @endforeach
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()