@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/bundles/dropify/css/dropify.min.css') }}">
@endsection

@section('content')
    <div class="section-body">
        <x-validation-component></x-validation-component>
        <div class="row mt-sm-4"> 
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image" src="{{ asset($komik->thumbnail) }}" style="border-radius: 10%"
                                class="author-box-picture mb-1">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <a href="#">{{ $komik->name }}</a>
                            </div>
                            <div class=" "><span
                                    class="badge bg-primary text-white">{{ $komik->status }}</span></div>
                        </div>
                        <div class="">
              <div class=" author-box-description">
                            <?= $komik->description ?>
                        </div>

                        <div class="w-100 d-sm-none"></div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-12 col-md-12 col-lg-8">
            <div class="card">
                <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="list-chapter" data-toggle="tab" href="#about" role="tab"
                                aria-selected="true">Daftar Chapter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="add-chapter" data-toggle="tab" href="#settings" role="tab"
                                aria-selected="false">Tambah Chapter</a>
                        </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="list-chapter">
                            <div class="row">
                                <div class="col-md-12 col-12 b-r">
                                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder list-chapter">
                                        @foreach($komik->chapter as $c)
                                        <li class="media">
                                            <img alt="image" class="mr-3" width="40" style="border-radius: 10%"  src="{{ asset($komik->thumbnail) }}">
                                            <div class="media-body">
                                                <div class="media-title">{{ $c->name }}</div>
                                                <div class="text-job text-muted">{{ $c->created_at }}</div>
                                            </div>
                                            <div class="media-progressbar">
                                                 
                                            </div>
                                            <div class="media-cta mt-2">
                                                <a href="{{ route("chapter.detail",$c->id) }}" class="btn btn-outline-primary">Baca</a>
                                                <a href="{{ route("chapter.delete",$c->id) }}" class="btn btn-outline-danger">Hapus</a>
                                            </div>
                                        </li>
                                        @endforeach
                                     
                                      
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="add-chapter">
                            <form method="post" enctype="multipart/form-data" action="{{ route('chapter.store','create') }}" class="needs-validation">
                                @csrf
                                <div class="card-header">
                                    <h4>Tambah Chapter</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Nama Chapter</label>
                                            <input type="hidden" name="id_komik" value="{{ $komik->id }}"> 
                                            <input type="text" name="name" id="name" class="form-control" value=""
                                                placeholder="Nama Chapter">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Type Upload</label>
                                            <select class="form-control" name="upload_type" required>
                                                <option value="">Pilih Type</option>
                                                <option value="byimage">By Image</option>
                                                <option value="pdf">PDF</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-none" id="typepdf">
                                        <div class="form-group col-md-12">
                                            <label for="file">Upload File PDF </label>
                                            <input type="file" name="file" class="dropify" id="file">
                                        </div>
                                    </div>
                                    <div class="row d-none mt-2" id="typeimage">
                                        <table class="table">
                                            <thead>
                                                <tr class="text-white" style="background-color: #22a322">
                                                    <td>#</td>
                                                    <td>Upload Image</td>
                                                    <td>Option</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="uploader-0">
                                                    <td>#</td>
                                                    <td>
                                                        <input type="hidden" name="chapter_id[]">
                                                        <input type="file" name="image[]" class="form-control">
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="javascript:void(0)" onclick="add_image()"
                                                            class="btn btn-sm btn-success"><i
                                                                class="fa fa-plus"></i></a>
                                                        <a class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Tambahkan Chapter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/bundles/dropify/js/dropify.min.js') }}"></script>
    <script>
        const domain = document.location.origin;
        const token = $("meta[name=csrf-token]").attr("content");
        var spinner = $("#loader");
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();
        });

        $("select[name='upload_type']").on("change", function() {
            if ($(this).val() == "byimage") {
                $("#typeimage").removeClass("d-none");
                $("#typepdf").addClass("d-none");
            } else if ($(this).val() == "pdf") {
                $("#typeimage").addClass("d-none");
                $("#typepdf").removeClass("d-none");
            } else {
                $("#typeimage").addClass("d-none");
                $("#typepdf").addClass("d-none");
            }
        });

        function add_image() {
            var cloning =
                ` <tr class="uploader"><td>#</td><td><input type="hidden" name="chapter_id[]"><input type="file" name="image[]" class="form-control"></td> <td class="text-right"><a href="javascript:void(0)" class="btn btn-sm btn-danger delete-image"><i class="fa fa-times"></i></a></td></tr>`;
            $(".uploader-0").after(cloning);
        }

        $("body").on("click", ".delete-image", function() {
            $(this).parents(".uploader").remove();
        });
    </script>
@endsection
