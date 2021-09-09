@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/bundles/jq-3d-flip-book/css/flipbook.style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/jq-3d-flip-book/css/font-awesome.css') }}">
@endsection

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $page }}</h3>
                    </div>
                    <div class="card-body">
                        <div style="height: 750px" id="reading" />
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/bundles/jq-3d-flip-book/js/flipbook.min.js') }}"></script>
    @if ($data->upload_type == 'byimage')
        <script>
            const domain = document.location.origin;
            $(document).ready(function() {
                $.ajax({
                    url: domain + "/admin/chapter/get-image/" + "{{ $data->id }}",
                    type: "GET",
                    data: "",
                    success: function(data) {
                        console.log(data);
                        $("#reading").flipBook({
                    pages: data
                });
                    },

                    cache: false,
                    contentType: false,
                    processData: false,
                });
                
            })
        </script>
    @elseif($data->upload_type == 'pdf')
        <script>
            const domain = document.location.origin;
            $(document).ready(function() {
                $("#reading").flipBook({
                    pdfUrl: '{{ asset($data->file) }}'
                })
            })
        </script>
    @endif

@endsection
