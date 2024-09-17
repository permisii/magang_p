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
                        <a class="nav-link text-gray" href="{{ route('master.assets.prev_maintenance_index') }}" role="tab">Maintenance</a>
                    </li>

                    {{--<li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.unscheduled_maintenance_index') }}" role="tab">Unscheduled Maintenance</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.timeline') }}" role="tab">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('master.assets.parts_index') }}" role="tab">Parts</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                {{-- <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Sub Area</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly
                                    placeholder="" value="Refiner">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Tag</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly
                                    placeholder="" value="001-001-A21">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Departemen</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly
                                    placeholder="" value="Listrik">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Asset</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly
                                    placeholder="" value="Motor">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Status</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly
                                    placeholder="" value="In Use">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Model</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly
                                    placeholder="" value="M2BA315SMB4B3">
                            </div>
                        </div>
                    </div>
                </div> --}}

                <table id="data-table" class="table table-bordered table-striped table-hover nowrap">
                    <thead>
                        <tr>
                            <th>OPTIONS</th>
                            <th>PART NUMBER</th>
                            <th>NAMA</th>
                            <th>MERK</th>
                            <th>JENIS</th>
                            <th>DIPASANG</th>
                            <th>RUNTIME</th>
                            <th>RUNTIME ALERT</th>
                            <th>SISA RUNTIME</th>
                            <th>LIFETIME</th>
                            <th>LIFETIME ALERT</th>
                            <th>AKHIR LIFETIME</th>
                            <th>QTY DIPAKAI</th>

                            <th>INDEX GUDANG</th>
                            <th>NAMA BARANG DI GUDANG</th>
                            <th>STOCK GUDANG</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.parts_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>30 05 JR P6X</td>
                            <td>Bearing</td>
                            <td>Custom </td>
                            <td>Slow Moving Part </td>
                            <td>30/10/2023</td>
                            <td>7.000 hrs</td>
                            <td>144 jam</td>
                            <td>6.760 jam</td>
                            <td>5 tahun</td>
                            <td>10 hari</td>
                            <td>30/10/2028</td>
                            <td>2 </td>

                            <td>K3-KO-BL0178</td>
                            <td>Bearing</td>
                            <td>12</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.parts_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>30 05 JR P6X</td>
                            <td>Rotor</td>
                            <td>Custom </td>
                            <td>Slow Moving Part </td>
                            <td>30/10/2023</td>
                            <td>7.000 hrs</td>
                            <td>144 jam</td>
                            <td>6.760 jam</td>
                            <td>5 tahun</td>
                            <td>10 hari</td>
                            <td>30/10/2028</td>
                            <td>2 </td>

                            <td>K3-KO-BL0178</td>
                            <td>Rotor</td>
                            <td>12</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.parts_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>30 05 JR P6X</td>
                            <td>Stator</td>
                            <td>Custom </td>
                            <td>Slow Moving Part </td>
                            <td>30/10/2023</td>
                            <td>7.000 hrs</td>
                            <td>144 jam</td>
                            <td>6.760 jam</td>
                            <td>5 tahun</td>
                            <td>10 hari</td>
                            <td>30/10/2028</td>
                            <td>2 </td>

                            <td>K3-KO-BL0178</td>
                            <td>Stator</td>
                            <td>12</td>
                        </tr>




                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.parts_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>30 05 JR P6X</td>
                            <td>Cooling Fan</td>
                            <td>Custom </td>
                            <td>Slow Moving Part </td>
                            <td>30/10/2023</td>
                            <td>7.000 hrs</td>
                            <td>144 jam</td>
                            <td>6.760 jam</td>
                            <td>5 tahun</td>
                            <td>10 hari</td>
                            <td>30/10/2028</td>
                            <td>2 </td>

                            <td>K3-KO-BL0178</td>
                            <td>Cooling Fan</td>
                            <td>12</td>
                        </tr>


                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('master.assets.parts_detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                        Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                            <td>30 05 JR P6X</td>
                            <td>Shaft</td>
                            <td>Custom </td>
                            <td>Slow Moving Part </td>
                            <td>30/10/2023</td>
                            <td>7.000 hrs</td>
                            <td>144 jam</td>
                            <td>6.760 jam</td>
                            <td>5 tahun</td>
                            <td>10 hari</td>
                            <td>30/10/2028</td>
                            <td>2 </td>

                            <td>K3-KO-BL0178</td>
                            <td>Shaft</td>
                            <td>12</td>
                        </tr>

                    </tbody>
                </table>


                <blockquote class="quote-info mt-5 border-top border-bottom border-right border-info text-sm">
                    <h5 id="tip">Keterangan :</h5>
                    <p>
                    <ul>
                        <li><strong class="text-info">QTY DIPAKAI : </strong> Jumlah part dipakai dalam satu asset</li>
                        <li><strong class="text-info">KODE GUDANG : </strong> Index gudang</li>
                        <li><strong class="text-info">STOCK GUDANG : </strong> Jumlah yang tersedia di gudang</li>
                    </ul>
                    </p>

                </blockquote>

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
            // "autoWidth": false,
            "scrollX": true,
            "columnDefs" : [
                {"width" : "100px", "targets": [0]},
                { "className": "text-right", "targets": [5, 6, 7, 8, 9, 10, 11, 12, 15]}
            ],
            "buttons": [
               {
                    text: '<i class="fas fa-plus"></i> Tambah Part',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open('{{ route('master.assets.parts_form') }}', '_self')
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
