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
                    <form id="cSettings" method="POST" enctype="multipart/form-data" class="card">
                        @csrf
                        <div class="card-header">
                            <h4>{{$page}}</h4>
                        </div>
                        <div class="card-body">
                            <x-validation-component></x-validation-component>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name">Nama Website</label>
                                    <input type="text" name="name" class="form-control" id="title" placeholder="Nama Website" value="{{$settings->name}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="email">Website Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Website Email" value="{{$settings->email}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="phone">Website Phone</label>
                                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Website Phone" value="{{$settings->phone}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="fax">Website Fax</label>
                                    <input type="number" name="fax" class="form-control" id="fax" placeholder="Website fax" value="{{$settings->fax}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="instagram_link">Instagram Link</label>
                                    <input type="url" name="instagram_link" class="form-control" id="instagram_link" placeholder="Url Instagram" value="{{$settings->instagram_link}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="url" name="twitter_link" class="form-control" id="twitter_link" placeholder="Url Twitter" value="{{$settings->twitter_link}}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="youtube_link">Youtube Link</label>
                                    <input type="url" name="youtube_link" class="form-control" id="youtube_link" placeholder="Url Youtube" value="{{$settings->youtube_link}}">
                                </div>

                                 <div class="form-group col-md-3">
                                    <label for="facebook_link">Facebook Link</label>
                                    <input type="url" name="facebook_link" class="form-control" id="facebook_link" placeholder="Url Facebook" value="{{$settings->facebook_link}}">
                                </div>

                                 <div class="form-group col-md-6">
                                    <label for="copyright">Copyright Footer</label>
                                    <input type="text" name="copyright" class="form-control" id="copyright" placeholder="Copyright" value="{{$settings->copyright}}">
                                </div>

                                 <div class="form-group col-md-6">
                                    <label for="notice">Notice Header</label>
                                    <input type="text" name="notice" class="form-control" id="notice" placeholder="Notice Header" value="{{$settings->notice}}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="address">Alamat Perusahaan</label>
                                   <textarea class="form-control" name="address">{{$settings->address}}</textarea>
                                </div>

                            </div>

                            <div class="form-row"> 
                                <div class="form-group col-md-12">
                                    <label for="about">About Home Page</label>
                                    <textarea name="about" class="summernote-simple">{{$settings->about}}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="file">Logo Website</label>
                                    <input type="file" name="logo" class="dropify" id="file" data-default-file="{{ asset($settings->logo) }}">
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

        $("form#cSettings").on("submit", function(e) {
            spinner.show();
            e.preventDefault();
            var formData = new FormData(this);
            setTimeout(function() {
                $.ajax({
                    url: domain + "/admin/pengaturan/store",
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
                            toastr.success("Pengaturan Website Berhasil diperbaharui", "success", {
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