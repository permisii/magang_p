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
            </ol>
        </div>
        <div class="card card-info card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-gray " href="{{ route('master.assets.detail') }}" role="tab">General</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('master.assets.prev_maintenance_index') }}" role="tab">Maintenance</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.timeline') }}" role="tab">History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.parts_index') }}" role="tab">Parts</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">

                {{-- <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Sub Area</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly placeholder="" value="Refiner">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Tag</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly placeholder="" value="001-001-A21">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Departemen</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly placeholder="" value="Listrik">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Asset</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly placeholder="" value="Motor">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Status</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly placeholder="" value="In Use">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Model</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly placeholder="" value="M2BA315SMB4B3">
                            </div>
                        </div>
                    </div>
                </div> --}}


                <table id="data-table" class="table table-bordered table-striped table-hover nowrap">
                    <thead>
                        <tr>
                            <th>OPTIONS</th>
                            <th>TINDAKAN</th>
                            <th>SCHEDULE SETIAP</th>
                            <th>DESCRIPTION</th>
                            <th>TYPE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>Current Check</td>
                            <td class="text-left">Maintenance Bulanan</td>
                            <td>Pastikan arus listrik yang bekerja pada motor masih dibawah arus maksimal yang tertera pada nameplate motor.</td>
                            <td><span class="badge bg-info">Oleh User</span></td>

                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>Insulation resistance Check</td>
                            <td class="text-left">Maintenance Bulanan</td>
                            <td>Ukur tahanan isolasi tiap phasa terhadap ground jika tahanan isolasinya lebih dari 5 Mega Ohm artinya motor dalam keadaan baik karena jika lebih kecil dari 1 mega Ohm <br>artinya keadaan lilitan terhadap ground lembab dan bisa mengakibatkan short ciruit ketika motor dijalankan</td>
                            <td><span class="badge bg-info">Oleh User</span></td>

                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>Temperature Check</td>
                            <td class="text-left">Maintenance Harian</td>
                            <td>Pengecekan suhu ini dilakukan untuk memastikan agar motor tidak mengalami overheating saat dijalankan</td>
                            <td><span class="badge bg-info">Oleh User</span></td>

                        </tr>



                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>Cek Keseluruhan Kondisi Asset</td>
                            <td class="text-left">Maintenance Tahunan</td>
                            <td>Pastikan asset dalam kondisi baik dan siap digunakan 1 tahun ke depan.</td>
                            <td><span class="badge bg-info">Oleh User</span></td>

                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>Penggantian Oli Gearbox</td>
                            <td class="text-left">8.000 Jam</td>
                            <td>Kuras dan ganti oli dengan yang baru</td>
                            <td><span class="badge bg-info">Oleh User</span></td>

                        </tr>

                        {{-- <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>Insulation resistance Check</td>
                            <td>1.000 jam</td>
                            <td>Ukur tahanan isolasi tiap phasa terhadap ground jika tahanan isolasinya lebih dari 5 Mega Ohm artinya motor dalam keadaan baik karena jika lebih kecil dari 1 mega Ohm <br>artinya keadaan lilitan terhadap ground lembab dan bisa mengakibatkan short ciruit ketika motor dijalankan</td>
                            <td><span class="badge bg-info">Oleh User</span></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>Temperature Check</td>
                            <td>24 jam</td>
                            <td>Pengecekan suhu ini dilakukan untuk memastikan agar motor tidak mengalami overheating saat dijalankan</td>
                            <td><span class="badge bg-info">Oleh User</span></td>
                        </tr> --}}






                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail_system') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>

                                </div>
                            </td>
                            <td>Overhaul Runtime</td>
                            <td>7.000 jam</td>
                            <td>Overhaul karena masa runtime habis</td>
                            <td><span class="badge bg-green">Generate Oleh System</span></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.prev_maintenance_detail_system') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>

                                </div>
                            </td>
                            <td>Overhaul Lifetime</td>
                            <td>5 th</td>
                            <td>Overhaul karena lifetime habis </td>
                            <td><span class="badge bg-green">Generate Oleh System</span></td>
                        </tr>
                    </tbody>


                </table>
            </div>

            <div class="card-footer">
                <a href="{{ route('master.assets.index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar Assets
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
            "ordering": false,
            "columnDefs" : [
                // {"className": "text-center", "targets":[4]},
                {"className": "text-right", "targets":[2]},
                {"width" : "100px", "targets": [0, 2]}
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
                    text: '<i class="fas fa-plus"></i> Tambah Maintenance',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open('{{ route('master.assets.prev_maintenance_form') }}', '_self')
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
