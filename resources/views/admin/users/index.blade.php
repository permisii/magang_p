@extends('templates.web.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info card-outline">
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Unit</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">All (Super User) </option>
                            <option value="">General Support</option>
                            <option value="">Unit Produksi 1/2</option>
                            <option value="">Unit Produksi 3</option>
                            <option value="">Unit Cogen/Soda</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-5">
                    <div class="offset-sm-2 col-sm-3">
                        <div class="btn-group btn-block">
                            <button class="btn btn-default btn-sm">
                                <i class="fas fa-fw fa-search"></i>
                                Filter
                            </button>
                            <button class="btn btn-default btn-sm">
                                <i class="fas fa-undo"></i>
                                Reset Filter
                            </button>
                        </div>

                    </div>
                </div>

                <table id="data-table" class="table table-bordered table-striped table-hover nowrap">
                    <thead>
                        <th>OPTIONS</th>
                        <th>NIP</th>
                        <th>NAMA LENGKAP</th>
                        <th>USERNAME</th>
                        <th>UNIT</th>
                        <th>AKTIF</th>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.users.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                    <button onclick="resetpass()" class="btn btn-sm btn-default text-info"><i class="fas fa-fw fa-lock-open"></i> Reset Pass</button>
                                    <a href="{{ route('admin.users.akses') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-check"></i> Akses</a>
                                </div>

                            </td>
                            <td>K3-12H-001</td>
                            <td>Imron Rosadi</td>
                            <td>imron</td>
                            <td>General Support</td>
                            <td><span class="badge badge-success">YES</span></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.users.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                    <button onclick="resetpass()" class="btn btn-sm btn-default text-info"><i class="fas fa-fw fa-lock-open"></i> Reset Pass</button>
                                    <a href="{{ route('admin.users.akses') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-check"></i> Akses</a>
                                </div>

                            </td>
                            <td>K3-12H-001</td>
                            <td>Sucipto</td>
                            <td>cip</td>
                            <td>General Support</td>
                            <td><span class="badge badge-success">YES</span></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.users.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                    <button onclick="resetpass()" class="btn btn-sm btn-default text-info"><i class="fas fa-fw fa-lock-open"></i> Reset Pass</button>
                                    <a href="{{ route('admin.users.akses') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-check"></i> Akses</a>
                                </div>

                            </td>
                            <td>K3-12H-001</td>
                            <td>Fajar Suryansah</td>
                            <td>fajarsur</td>
                            <td>General Support</td>
                            <td><span class="badge badge-success">YES</span></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.users.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                    <button onclick="resetpass()" class="btn btn-sm btn-default text-info"><i class="fas fa-fw fa-lock-open"></i> Reset Pass</button>
                                    <a href="{{ route('admin.users.akses') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-check"></i> Akses</a>
                                </div>

                            </td>
                            <td>K3-12H-001</td>
                            <td>Andi Setyono</td>
                            <td>andi_s</td>
                            <td>General Support</td>
                            <td><span class="badge badge-success">YES</span></td>
                        </tr>



                    </tbody>

                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function () {
        $("#data-table").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "columnDefs" : [
                {"className": "text-center", "targets":[5]},
                {"width" : "175px", "targets": [0, 4]}
            ],
            "buttons": [
                // {
                //     extend: "colvis",
                //     text: '<i class="fas fa-columns"></i> Kolom',
                //     className : 'btn btn-default',
                //     init: function(api, node, config) {
                //         $(node).removeClass('btn-secondary')
                //     }
                // }
                {
                    text: '<i class="fas fa-plus"></i> Tambah User',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open("{{ route('admin.users.form') }}", "_self")
                    }
                }


            ]
        }).buttons().container().appendTo('#data-table_wrapper .col-md-6:eq(0)');
    });

    function resetpass() {
        if (confirm('Reset Password Pengguna') == true) {
            alert('Password user berubah menjadi "Pakerin999"');
        }

    }
</script>
@endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
