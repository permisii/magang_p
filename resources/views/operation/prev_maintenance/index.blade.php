@extends('templates.web.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- <div class="card-header"></div> --}}
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Sub Area</label>
                    <div class="col-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <optgroup label="Stock Preparation 1">
                                <option value="">Pulper</option>
                                <option value="" selected>Refiner</option>
                                <option value="">Deflaker</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Status</label>
                    <div class="col-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">All</option>
                            <option value="">Ditangani</option>
                            <option value="">Belum Ditangani</option>
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
                        <th>OBJECT</th>
                        <th style="min-width: 120px">UNIT</th>
                        <th style="min-width: 150px">AREA</th>
                        <th style="min-width: 120px">SUB AREA</th>
                        <th style="min-width: 120px">TAG</th>
                        <th style="min-width: 120px">ASSETS</th>
                        <th style="min-width: 120px">PART</th>
                        <th style="min-width: 100px">TYPE</th>
                        <th style="min-width: 100px">DUE</th>
                        <th style="min-width: 120px">STATUS</th>
                        <th>DESC</th>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail_asset') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td><span class="badge bg-lightblue">Asset</span></td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>
                            <td></td>
                            <td>Overhaul</td>
                            <td class="bg-warning">360 Jam Lagi</td>
                            <td><span class="badge badge-warning">Belum ditangani</span> </td>
                            <td>Overhaul asset berdasarkan habisnya masa lifetime</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail_asset') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td><span class="badge bg-lightblue">Asset</span></td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>
                            <td></td>
                            <td>Maintenance Bulanan</td>
                            <td class="bg-warning">2 hari Lagi</td>
                            <td><span class="badge badge-warning">Belum ditangani</span> </td>
                            <td>Current Check</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail_asset') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td><span class="badge bg-lightblue">Asset</span></td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>
                            <td></td>
                            <td>Maintenance Bulanan</td>
                            <td class="bg-warning">2 hari Lagi</td>
                            <td><span class="badge badge-warning">Belum ditangani</span> </td>
                            <td>Insulation resistance Check</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail_asset') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td><span class="badge bg-lightblue">Asset</span></td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>
                            <td></td>
                            <td>Maintenance Harian</td>
                            <td class="bg-warning">Hari ini</td>
                            <td><span class="badge badge-warning">Belum ditangani</span> </td>
                            <td>Temperature Check</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td><span class="badge bg-teal">Part</span></td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>
                            <td>Rotor</td>
                            <td>Runtime</td>
                            <td class="bg-warning">360 Jam Lagi </td>
                            <td><span class="badge badge-warning">Belum ditangani</span> </td>
                            <td>Pengantian sparepart berdasarkan habisnya masa runtime</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td><span class="badge bg-teal">Part</span></td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>

                            <td>Bearing</td>
                            <td>Lifetime</td>
                            <td class="bg-red">2023/11/09</td>
                            <td><span class="badge bg-red">Belum ditangani</span> </td>
                            <td>Pengantian part berdasarkan habisnya masa lifetime </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td><span class="badge bg-teal">Part</span></td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>
                            <td>Brush</td>
                            <td>Lifetime</td>
                            <td>2023/11/10</td>
                            <td><span class="badge bg-info">Sudah ditangani</span> </td>
                            <td>Pengantian sparepart berdasarkan habisnya masa lifetime</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td><span class="badge bg-teal">Part</span></td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>

                            <td>Shaft</td>
                            <td>Lifetime</td>
                            <td>2023/11/10</td>
                            <td><span class="badge bg-info">Sudah ditangani</span> </td>
                            <td>Pengantian sparepart berdasarkan habisnya masa lifetime</td>
                        </tr>



                        {{-- <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>Motor</td>
                            <td>Coil Rotator</td>
                            <td>Runtime</td>
                            <td class="bg-warning">360 hrs worktime</td>
                            <td><span class="badge badge-warning">Belum ditangani</span> </td>
                            <td>Pengantian sparepart berdasarkan habisnya masa runtime</td>
                        </tr>


                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>Motor</td>
                            <td>Shaft</td>
                            <td>Lifetime</td>
                            <td class="bg-red">2023/11/09</td>
                            <td><span class="badge bg-red">Belum ditangani</span> </td>
                            <td>Pengantian sparepart berdasarkan habisnya masa lifetime</td>
                        </tr>


                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>Motor</td>
                            <td>Brush</td>
                            <td>Lifetime</td>
                            <td>2023/11/10</td>
                            <td><span class="badge bg-info">Sudah ditangani</span> </td>
                            <td>Pengantian sparepart berdasarkan habisnya masa lifetime</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.prev_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                </div>
                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>Motor</td>
                            <td></td>
                            <td>Overhole</td>
                            <td class="bg-warning">360 hrs worktime</td>
                            <td><span class="badge badge-warning">Belum ditangani</span> </td>
                            <td>Overhaul asset berdasarkan habisnya masa lifetime</td>
                        </tr> --}}


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
            // "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "scrollX": true,
            "sorting" : false,
            "columnDefs" : [
                // {"className": "text-right", "targets":[6]},
                {"className": "text-center","width" : "140px", "targets":[1,10]},
                {"width" : "100px", "targets": [0]}

            ],
            "buttons": [



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
