@extends('templates.web.template')

@section('content')
<div class="row">

    <div class="col-12">
        <div class="row">
            <ol class="breadcrumb nav-asset">
                <li class="breadcrumb-item">Unit Produksi 1</li>
                <li class="breadcrumb-item">Stock Preparation 1</li>
                <li class="breadcrumb-item">Refiner</li>
                <li class="breadcrumb-item">Motor</li>
                <li class="breadcrumb-item">Part : Rotor</li>
            </ol>
        </div>

        <div class="card card-info card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link   text-gray" href="{{ route('master.assets.parts_detail') }}" role="tab">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('master.assets.parts_history') }}" role="tab">History</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <table id="data-table" class="table table-bordered table-striped table-hover nowrap">
                    <thead>
                        <tr>

                            <th>TANGGAL</th>
                            <th>TINDAKAN</th>
                            <th>JENIS TINDAKAN</th>
                            <th>RESET RUNTIME</th>
                            <th>DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>25/09/2022</td>
                            <td>Pasang Baru</td>
                            <td><span class="badge badge-info">Pasang Baru</span> </td>
                            <td><span class="badge badge-info">YES</span></td>
                            <td>Pasang Baru (generate by system)</td>
                        </tr>

                        <tr>

                            <td>10/10/2023</td>
                            <td>Penggantian karena lilitan terbakar</td>
                            <td><span class="badge badge-warning">Penggantian Rusak</span></td>
                            <td><span class="badge badge-info">YES</span></td>
                            <td>Job ke BI dengan no PK J23/10/X/2023</td>
                        </tr>
                    </tbody>

                </table>
            </div>

            <div class="card-footer">
                <a href="{{ route('master.assets.parts_index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar Parts
                </a>
            </div>
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
            // "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "scrollX": true,
            "columnDefs" : [
                {"width" : "100px", "targets": [0]},
                { "className": "text-center", "targets": [2,3]}
            ],
            "buttons": [
               {
                    text: '<i class="fas fa-plus"></i> Tambah History',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open('{{ route('master.assets.parts_history_form') }}', '_self')
                    }
                }
            ]
        }).buttons().container().appendTo('#data-table_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
