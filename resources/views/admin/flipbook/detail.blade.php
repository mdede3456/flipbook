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
                        <h3>{{ $flipbook->title }}</h3>
                    </div>
                    <div class="card-body">
                        <div style="height: 750px" id="reading" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Detail</h2>
                        </div>
                        <div class="card-body">
                            <?= $flipbook->description ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/bundles/jq-3d-flip-book/js/flipbook.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#reading").flipBook({
                pdfUrl: '{{ asset($flipbook->file) }}'
            })
        })
    </script>
@endsection
