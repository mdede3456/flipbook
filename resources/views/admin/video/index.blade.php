@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $page }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center"> No </th>
                                <th>Nama / Judul</th>
                                <th>Kategori</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($video as $f)
                            <tr>
                                <td>
                                    {{ $no++ }}
                                </td>
                                <td>{{ $f->title }}</td>
                                <td>{{ $f->category->name ?? '' }}</td>
                                <td>{{ $f->author->name ?? '' }}</td>
                                <td>
                                    <span class="badge bg-primary text-white">{{ $status[$f->status] }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('video.update',$f->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Update</a>
                                    <a href="{{ route('video.delete',$f->id) }}" class="btn btn-sm btn-danger deletebutton"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/datatables.js') }}"></script>
@endsection
