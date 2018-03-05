@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-default">
                    <div class="card-header"><strong>Add new category:</strong>
                        <a class="btn btn-light pull-right icon fa-user" href="{{route('adminMenu')}}">Back to menu</a>
                    </div>

                    <div class="card-body col-lg-12">
                        <form method="POST" id="category-save" action="{{ route('category-save') }}">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" name="name" type="text"  >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="subscribe" class="col-md-4 col-form-label text-md-right">Subscribe</label>

                                <div class="col-md-6">
                                    <input id="subscribe" name="subscribe" type="text"  >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        Add new category
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-default">
                    <div class="card-header"><strong>Categories:</strong>

                    </div>

                    <div class="card-body col-lg-12">
                        @foreach( $dataAllCtg as $data )


                            <div class="form-group row">
                                <div class="col-sm-5">
                            <strong><span class="text  ">{{$data['category']}}</span></strong></div>
                            <div class="col-sm-2 ">
                            <strong><span class="text ">{{$data['subscribe']}}</span></strong>
                            </div>
                            <div class="col-sm-3 pull-right">
                            <a  class=" btn btn-danger icon fa-remove " href="{{ route('delete-category', ['id' => $data['id']]) }}">Delete</a>
                                    </div>
                                </div>

                        @endforeach()

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
@endsection