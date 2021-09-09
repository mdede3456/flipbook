@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css') }}">
@endsection

@section('content')
    <div class="section-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- action="{{ route("flipbook.store",'create') }}" --}}
                    <form id="cManga" method="POST" enctype="multipart/form-data" class="card">
                        @csrf
                        <div class="card-header">
                            <h4>{{ $page }}</h4>
                        </div>
                        <div class="card-body">
                            <x-validation-component></x-validation-component>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Judul Manga</label>
                                    <input type="hidden" name="id" value="{{ $komik->id }}">
                                    <input type="text" name="name" value="{{ $komik->name }}" class="form-control" id="name"
                                        placeholder="Judul Komik / Nama Anime">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Genre Manga</label>
                                    <select class="form-control select2" name="genre_id">
                                        <option value="">Pilih Genre</option>
                                        @foreach ($genre as $g)
                                            <option value="{{ $g->id }}" @if($g->id == $komik->genre_id) selected @endif >{{ $g->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="">Pilih Status</option>
                                        @foreach($status as $s => $value)
                                            <option value="{{ $s }}" @if($s == $komik->status)  selected @endif >{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Rate Manga</label>
                                    <input type="number" name="rate" class="form-control" id="rate" value="{{ $komik->rate }}" max="5" min="1" value="1">
                                </div>

                            </div>


                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="description">Deskripsi / Detail</label>
                                    <textarea name="description" class="summernote-simple">{{ $komik->description }}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="file">Thumbnail <b style="font-size: 10px">( Upload dengan format jpg,jpeg,png)</b> </label>
                                    <input type="file" name="thumbnail" data-default-file="{{ asset($komik->thumbnail) }}" class="dropify" id="file">
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
    {{-- Summernote --}}
    <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>

    {{-- Select2 --}}
    <script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File --> 
    {{-- Dropify --}}
    <script src="{{ asset('assets/bundles/dropify/js/dropify.min.js') }}"></script>
    <script>
        const domain = document.location.origin;
        const token = $("meta[name=csrf-token]").attr("content");
        var spinner = $("#loader");
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();
        });

        $("form#cManga").on("submit", function(e) {
            spinner.show();
            e.preventDefault();
            var formData = new FormData(this);
            setTimeout(function() {
                $.ajax({
                    url: domain + "/admin/manga/store/update",
                    type: "POST",
                    data: formData,
                    success: function(data, json, errorThrown) {
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
                                    html: errorsHtml,
                                    width: "auto",
                                    confirmButtonText: "Coba Lagi",
                                    cancelButtonText: "Tutup",
                                    showCancelButton: false,
                                },
                                function(isConfirm) {
                                    if (isConfirm) {
                                        $("#openModal").on(
                                            "click"); //this is when the form is in a modal
                                    }
                                }
                            );
                            spinner.hide();
                        } else {
                            toastr.success("Data Manga Berhasil diperbaharui", "success", {
                                timeOut: 5e3,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                positionClass: "toast-top-right",
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "100",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1,
                            });
                            spinner.hide(); 
                        }
                    },

                    cache: false,
                    contentType: false,
                    processData: false,
                });
            }, 130);
        });
    </script>
@endsection
