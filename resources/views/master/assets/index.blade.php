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
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">All</option>
                            <option value="">In Use</option>
                            {{-- <option value="">Maintenance</option> --}}
                            <option value="">Unused</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Departemen</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">All</option>
                            <option value="">Listrik</option>
                            <option value="">Instrumen</option>
                            <option value="">Komputer</option>
                            <option value="">Mekanik</option>
                        </select>
                    </div>
                </div>


                {{-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2" checked>
                            <label class="form-check-label" for="exampleCheck2">Valid</label>
                        </div>
                    </div>
                </div> --}}

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
                        <th>UNIT</th>
                        <th>AREA</th>
                        <th>SUB AREA</th>

                        <th>TAG</th>
                        <th>ASSET</th>
                        <th>DEPARTEMEN</th>
                        <th>DESC.</th>
                        <th>STATUS</th>
                        {{-- <th>START DATE</th> --}}

                        <th>INDEX GUDANG</th>
                        <th>NAMA GUDANG</th>
                        <th>STOCK GUDANG</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Motor</td>
                            <td>Listrik</td>

                            <td>-</td>
                            <td><span class="badge badge-info">In Use</span></td>
                            {{-- <td>2022/09/25</td> --}}


                            <td>K3-KO-BL0178</td>
                            <td>Motor</td>
                            <td>1</td>
                        </tr>


                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Blade</td>
                            <td>Mekanik</td>
                            <td>-</td>
                            <td><span class="badge badge-info">In Use</span></td>
                            {{-- <td>2022/09/25</td> --}}
                            <td>K3-KO-BL0178</td>
                            <td>Blade</td>
                            <td>1</td>
                        </tr>


                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Control PLC</td>
                            <td>Istrumen</td>
                            <td>-</td>
                            <td><span class="badge badge-info">In Use</span></td>
                            {{-- <td>2022/09/25</td> --}}
                            <td>K3-KO-BL0178</td>
                            <td>PLC</td>
                            <td>1</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>
                            <td>001-001-A21</td>
                            <td>Pump</td>
                            <td>Mekanik</td>
                            <td>-</td>
                            <td><span class="badge badge-info">In Use</span></td>
                            {{-- <td>2022/09/25</td> --}}
                            <td>K3-KO-BL0178</td>
                            <td>Refiner Pump</td>
                            <td>1</td>
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
            // "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "scrollX": true,
            "columnDefs" : [
                {"className": "text-right", "targets":[11]},
                {"className": "text-center", "targets":[8]},
                {"width" : "100px", "targets": [0, 4, 6,7,8]}
            ],
            "buttons": [
                {
                    text: '<i class="fas fa-plus"></i> Tambah Asset',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open('{{ route('master.assets.form') }}', '_self')
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
