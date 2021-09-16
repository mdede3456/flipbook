@extends('layouts.admin')
@section('content')

@section('style') 
    <link rel="stylesheet" href="{{ asset('assets/bundles/dropify/css/dropify.min.css') }}"> 
@endsection

    <div class="section-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route("profile.store") }}" method="POST" enctype="multipart/form-data" class="card">
                        @csrf 
                        <div class="card-body">
                            <x-validation-component></x-validation-component>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control"  id="name" placeholder="Nama Lengkap" value="{{ Auth()->user()->name }}">
                                </div> 
                                <div class="form-group col-md-12">
                                    <label for="name">Email</label>
                                    <input type="email" name="email" value="{{ Auth()->user()->email }}" class="form-control"  id="name">
                                </div> 
                                <div class="form-group col-md-12">
                                    <label for="name">Password</label>
                                    <input type="password" name="password" class="form-control"  >
                                </div> 
                            </div>
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Photo</label>
                                    <input type="file"  data-default-file="{{ asset(Auth()->user()->photo) }}" class="dropify" name="photo" class="form-control" id="inputCity">
                                </div> 
                                 <div class="form-group col-md-6">
                                    <label for="inputCity">Banner</label>
                                    <input type="file"  data-default-file="{{ asset(Auth()->user()->banner) }}" class="dropify" name="banner" class="form-control" id="inputCity">
                                </div> 
                            </div>
                             
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts') 
    <script src="{{ asset('assets/bundles/dropify/js/dropify.min.js') }}"></script>
    <script>  
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();
        });
    </script>
@endsection