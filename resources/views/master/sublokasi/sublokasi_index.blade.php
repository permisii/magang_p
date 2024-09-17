@extends('templates.web.template')

@section('content')
<div class="row">

    <div class="col-12">
        <div class="card card-info card-outline">

            {{-- <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.lokasi.detail') }}" role="tab">
                            General
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="{{ route('master.lokasi.sublokasi_index') }}" role="tab">
                            Sub Area
                        </a>
                    </li>

                </ul>
            </div> --}}
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Area</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <optgroup label="Unit Produksi 1">
                                <option value="" selected>Stock Preparation 1</option>
                                <option value="">Stock Preparation 2</option>
                                <option value="">Paper Machine 1</option>
                                <option value="">Paper Machine 2</option>
                            </optgroup>
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
                        <th>UNIT</th>
                        <th>AREA</th>
                        <th>SUB AREA</th>
                        <th>DESCRIPTION</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.lokasi.sublokasi_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Refiner</td>


                            <td>-</td>

                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.lokasi.sublokasi_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Pulper</td>


                            <td>-</td>
                        </tr>



                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.lokasi.sublokasi_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>Unit Produksi 1</td>
                            <td>Stock Preparation 1</td>
                            <td>Deflaker</td>


                            <td>-</td>
                        </tr>

                    </tbody>

                </table>
            </div>

            <div class="card-footer">

            </div>
            <!-- /.card -->
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
                // {"className": "text-center", "targets":[0,3]},
                {"width" : "100px", "targets": [0]}
            ],
            "buttons": [
                // {
                //     extend: "colvis",
                //     text: '<i class="fas fa-columns"></i> Kolom',
                //     className : 'btn btn-default',
                //     init: function(api, node, config) {
                //         $(node).removeClass('btn-secondary')
                //     }
                // },
                {
                    text: '<i class="fas fa-plus"></i> Tambah Sub Area',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open('{{ route('master.lokasi.sublokasi_form') }}', '_self')
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
