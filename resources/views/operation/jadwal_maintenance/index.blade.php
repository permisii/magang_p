@extends('templates.web.template')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info card-outline">
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Type</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="" selected>All</option>
                            <option value="">Bulanan</option>
                            <option value="">Tahunan</option>


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
                        <th>OPTIONS</th>
                        <th>TYPE</th>
                        <th>TANGGAL MULAI</th>
                        <th>TANGGAL SELESAI </th>
                        <th>LOKASI </th>
                        <th>DESCRIPTION</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.jadwal_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td class="text-center"><span class="badge bg-red">Tahunan</span></td>
                            <td>16/04/2023</td>
                            <td>17/04/2023</td>
                            <td>
                                - Stock Preparation 1/2 <br>
                                - Paper Machine 1 <br>
                                - Paper Machine 2 <br>
                                - Stock Preparation 3 <br>
                                - Stock Preparation 5 <br>
                                - Paper Machine 3 <br>
                                - Paper Machine 5 <br>
                                - Stock Preparation 6 <br>
                                - Stock Preparation 7 <br>
                                - Paper Machine 6 <br>
                                - Paper Machine 7 <br>
                            </td>
                            <td>Maintenance Besar tahun 2023</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.jadwal_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td class="text-center"><span class="badge bg-olive">Bulanan</span></td>
                            <td>16/11/2023</td>
                            <td>17/11/2023</td>
                            <td>
                                - Stock Preparation 1/2 <br>
                                - Paper Machine 1 <br>
                            </td>
                            <td>Maintenance Rutin November 2023</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('operation.jadwal_maintenance.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td class="text-center"><span class="badge bg-olive">Bulanan</span></td>
                            <td>16/12/2023</td>
                            <td>17/12/2023</td>
                            <td>
                                - Stock Preparation 1/2 <br>
                                - Paper Machine 1 <br>
                            </td>
                            <td>Maintenance Rutin Desember 2023</td>
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
                    text: '<i class="fas fa-plus"></i> Tambah Jadwal Maintenance',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open("{{ route('operation.jadwal_maintenance.form') }}", "_self")
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
