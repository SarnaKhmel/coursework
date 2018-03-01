@extends('layouts.app')
@section('content')

    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css" >

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"><strong>Add new product</strong>
                        <a class="btn btn-light pull-right icon fa-home" href="{{route('home')}}">Home</a>
                        <a class="btn btn-light pull-right icon fa-user" href="{{route('user')}}">User</a>
                    </div>

                    <div class="card-body col-lg-10">
                        <form method="POST" id="product-save" action="{{ route('product-save') }}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" name="name" type="text"  >
                                </div>
                            </div>
                            <br>
                            <!--      <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                         <<div class="col-md-6">
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
                          <br> -->
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

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

                                <div class=" row col-md-5">
                                  <input type="file"  id="my-dropzone" class="dropzone pull-right" name="images[]" multiple>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    <script>
        Dropzone.options.myDropzone = {
            paramName: 'file',
            maxFilesize: 5,
            maxFiles: 15,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            init: function() {
                this.on("success", function(file, response) {
                    var a = document.createElement('span');
                    a.className = "thumb-url btn btn-primary";
                    a.setAttribute('data-clipboard-text','{{url('/uploads')}}'+'/'+response);
                    a.innerHTML = "copy url";
                    file.previewTemplate.appendChild(a);
                });
            }
        };
    </script>
@endsection