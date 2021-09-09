@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-sm btn-primary " href="javascript:void()" data-toggle="modal" data-target="#add"><i
                            class="fa fa-plus"></i> Tambah Genre </a>
                    <a class="d-none " id="updategenre" href="javascript:void()" data-toggle="modal" data-target="#update"></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center"> No </th>
                                    <th>Nama Genre</th>
                                    <th>Total Komik</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($genre as $f)

                                    <tr class="genre">
                                        <td>
                                            <input type="hidden" id="gi" value="{{ $f->id }}">
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            <p id="gn">{{ $f->name }}</p>
                                        </td>
                                        <td><span class="badge bg-primary text-white">{{ count($f->komik) }}</span></td>
                                        <td>
                                            <span class="badge bg-primary text-white">{{ $f->status }}</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning update_genre"><i
                                                    class="fa fa-edit"></i>
                                                Update</a>
                                            <a href="{{ route('genre.delete', $f->id) }}"
                                                class="btn btn-sm btn-danger deletebutton"><i class="fa fa-trash"></i>
                                                Delete</a>
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

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Tambah Genre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="" method="POST" action="{{ route('genre.store', 'create') }}">
                        @csrf
                        <div class=" form-group">
                            <label>Nama Genre</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-book"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Nama" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <select class="form-control" name="status">
                                    <option value="active">Aktif</option>
                                    <option value="tidak">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Tambahkan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Edit Genre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="" method="POST" action="{{ route('genre.store', 'update') }}">
                        @csrf
                        <div class=" form-group">
                            <label>Nama Genre</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-book"></i>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="genre_id">
                                <input type="text" class="form-control" placeholder="Nama" id="nama_genre" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <select class="form-control" name="status">
                                    <option value="active">Aktif</option>
                                    <option value="tidak">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/datatables.js') }}"></script>

    <script>
        $(".genre").on("click", ".update_genre", function() {
            genre = $(this).closest(".genre");
            $("#genre_id").val(genre.find("#gi").val());
            $("#nama_genre").val(genre.find("#gn").html());
            document.getElementById("updategenre").click();
            // $("#update_department").modal();
        });
    </script>
@endsection
