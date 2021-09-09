@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/dropify/css/dropify.min.css') }}">
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
                            <h4>Tambah Flipbook</h4>
                        </div>
                        <div class="card-body">
                            <x-validation-component></x-validation-component>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Judul">
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="description">Deskripsi / Detail</label>
                                    <textarea name="description" class="summernote-simple"></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="file">File Pdf</label>
                                    <input type="file" name="file" class="dropify" id="file">
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

        $("form#Cflipbook").on("submit", function(e) {
            spinner.show();
            e.preventDefault();
            var formData = new FormData(this);
            setTimeout(function() {
                $.ajax({
                    url: domain + "/admin/flipbook/store/create",
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
                            toastr.success("Data Flipbook Berhasil ditambahkan", "success", {
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
                            $("#title").val("");
                            $('.summernote-simple').summernote('code','');
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
