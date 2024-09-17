@extends('templates.web.template')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info card-outline">
            <div class="card-body">

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
                            <option value="">Oktober</option>
                            <option value="" selected>November</option>
                            <option value="">Desember</option>

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Tahun</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="" selected>2023</option>
                            <option value="">2024</option>
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
                        <th>NAMA</th>
                        <th>MULAI</th>
                        <th>SELESAI</th>
                        <th>SUB AREA</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.jadwal_prod.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>CO (128)</td>
                            <td>16/11/2023 07.00</td>
                            <td>02/12/2023 07.00</td>
                            <td>
                                - Stock Preparation 1 <br>
                                - Paper Machine 1 <br>
                            </td>
                        </tr>
                    </tbody>

                </table>
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
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script>
    $(function () {
        $("#data-table").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "columnDefs" : [
                // {"className": "text-center", "targets":[3]},
                 {"width" : "125px", "targets": [0]}
            ],
            "buttons": [
                {
                    text: '<i class="fas fa-plus"></i> Tambah Jadwal Produksi',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open("{{ route('operation.jadwal_prod.form') }}", "_self")
                    }
                }


            ]
        }).buttons().container().appendTo('#data-table_wrapper .col-md-6:eq(0)');
    });


    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
</script>
@endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
