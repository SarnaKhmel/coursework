@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Admin menu</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <a class="btn btn-primary "  href="{{url('/adminUsers')}}">     Table users</a>
                            <a class="btn btn-primary "  href="{{route('adminUserAdv')}}">   Table users adv</a>
                            <a class="btn btn-primary "  href="{{route('adminShopAdv')}}">   Table shop adv</a>
                            <a class="btn btn-primary "  href="{{route('adminCreate')}}">    Create adv</a>
                            <a class="btn btn-primary "  href="{{route('adminQuestions')}}"> Table questions</a>

                        </div>

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