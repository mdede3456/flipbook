@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/bundles/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
@endsection

@section('content')
<div class="section-body">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- action="{{ route("flipbook.store",'create') }}" --}}
                <form id="Cflipbook" method="POST" enctype="multipart/form-data" class="card">
                    @csrf
                    <div class="card-header">
                        <h4>{{$page}}</h4>
                    </div>
                    <div class="card-body">
                        <x-validation-component></x-validation-component>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Judul</label>
                                <input type="hidden" name="id" value="{{ $video->id }}">
                                <input type="text" name="title" value="{{ $video->title }}" class="form-control" id="title" placeholder="Judul">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="title">Kategori</label>
                                <select class="form-control" name="category_id">
                                    <option value="">Pilih Kategori</option>
                                    @foreach($category as $c)
                                    <option value="{{$c->id}}" @if($c->id == $video->category_id) selected @endif>{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Unggulan</label>
                                <select class="form-control" name="unggulan">
                                    @foreach($unggulan as $u => $value)
                                         <option value="{{$u}}" @if($u == $video->unggulan) selected @endif>{{$value}}</option> 
                                    @endforeach 
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Publish</label>
                                <select class="form-control" name="status">
                                    @foreach($status as $s => $value)
                                         <option value="{{$s}}" @if($s == $video->status) selected @endif>{{$value}}</option> 
                                    @endforeach 
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="video">Youtube Code</label>
                                <input type="text" name="video" class="form-control" value="{{$video->video}}" id="video" placeholder="Youtube Embed Code, Sample (4H_Hc3bspXc)">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="tag">Tag</label>
                                <input type="text" name="tag" class="form-control inputtags" id="tag" value="{{$video->tag}}">
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="file">Thumbnail Video</label>
                                <input type="file" name="thumbnail" class="dropify" id="file" data-default-file="{{ asset($video->thumbnail) }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="description">Deskripsi / Detail</label>
                                <textarea name="description" class="summernote-simple">{{ $video->description }}</textarea>
                            </div>
 
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/bundles/codemirror/lib/codemirror.js') }}"></script>
<script src="{{ asset('assets/bundles/codemirror/mode/javascript/javascript.js') }}"></script>
<script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('assets/bundles/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/ckeditor.js') }}"></script>

<script src="{{ asset('assets/bundles/dropify/js/dropify.min.js') }}"></script>
<script>
    const domain = document.location.origin;
    const token = $("meta[name=csrf-token]").attr("content");
    var spinner = $("#loader");
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
 $(".inputtags").tagsinput("items");
    $("form#Cflipbook").on("submit", function(e) {
        spinner.show();
        e.preventDefault();
        var formData = new FormData(this);
        setTimeout(function() {
            $.ajax({
                url: domain + "/admin/video/store/update"
                , type: "POST"
                , data: formData
                , success: function(data, json, errorThrown) {
                    if (data.message == "error") {
                        var errorsHtml = "";
                        $.each(data.errors, function(index, value) {
                            errorsHtml +=
                                '<ul class="list-group"><li class="list-group-item alert alert-danger">' +
                                value +
                                "</li></ul>";
                        });
                        Swal.fire({
                                title: data.message + " " + data
                                    .status, // this will output "Error 422: Unprocessable Entity"
                                html: errorsHtml
                                , width: "auto"
                                , confirmButtonText: "Coba Lagi"
                                , cancelButtonText: "Tutup"
                                , showCancelButton: false
                            , }
                            , function(isConfirm) {
                                if (isConfirm) {
                                    $("#openModal").on(
                                        "click"); //this is when the form is in a modal
                                }
                            }
                        );
                        spinner.hide();
                    } else {
                        toastr.success("Data Flipbook Berhasil diperbaharui", "success", {
                            timeOut: 5e3
                            , closeButton: !0
                            , debug: !1
                            , newestOnTop: !0
                            , progressBar: !0
                            , positionClass: "toast-top-right"
                            , preventDuplicates: !0
                            , onclick: null
                            , showDuration: "100"
                            , hideDuration: "1000"
                            , extendedTimeOut: "1000"
                            , showEasing: "swing"
                            , hideEasing: "linear"
                            , showMethod: "fadeIn"
                            , hideMethod: "fadeOut"
                            , tapToDismiss: !1
                        , });
                        spinner.hide();
                    }
                },

                cache: false
                , contentType: false
                , processData: false
            , });
        }, 130);
    });

</script>
@endsection
