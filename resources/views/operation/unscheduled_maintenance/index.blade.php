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
                            <option value="">All</option>
                            <option value="" selected>Unit Produksi 1</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Area</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">All</option>
                            <option value="">Paper Machine 1</option>
                            <option value="">Paper Machine 2</option>
                            <option value="" selected>Stock Preparation 1</option>
                            <option value="">Stock Preparation 2</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Sub Area</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">All</option>

                            <optgroup label="Stock Preparation 1">
                                <option value="">Pulper</option>
                                <option value="" selected>Refiner</option>
                                <option value="">Deflaker</option>

                            </optgroup>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Bulan</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">Januari</option>
                            <option value="">Februari</option>
                            <option value="">Maret</option>
                            <option value="">April</option>
                            <option value="">Mei</option>
                            <option value="">Juni</option>
                            <option value="">Juli</option>
                            <option value="">Agustus</option>
                            <option value="">September</option>
                            <option value="" selected>Oktober</option>
                            <option value="">November</option>
                            <option value="">Desember</option>

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Tahun</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">2022</option>
                            <option value="" selected>2023</option>

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
                        <tr>
                            <th>TANGGAL</th>
                            <th style="min-width: 125px">UNIT</th>
                            <th style="min-width: 125px">AREA</th>
                            <th style="min-width: 125px">SUB AREA</th>
                            <th style="min-width: 125px">ASSETS</th>
                            <th style="min-width: 125px">PART NUMBER</th>
                            <th style="min-width: 125px">PART</th>

                            <th>TINDAKAN</th>
                            <th>JENIS TINDAKAN</th>
                            <th>RESET RUNTIME</th>
                            <th>DESC.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10/10/2023</td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>Motor</td>
                            <td>30 05 JR P6X</td>

                            <td>Rotor</td>

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
                { "className": "text-center", "targets": [8,9]}
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
                // , {
                //     text: '<i class="fas fa-plus"></i> Tambah History',
                //     className : 'btn btn-default text-blue',
                //     action: function ( e, dt, node, config ) {
                //         window.open('{{ route('master.assets.parts_history_form') }}', '_self')
                //     }
                // }
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
