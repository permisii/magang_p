@extends('templates.web.template')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-body">

                    @for ($i = 1; $i <=2; $i++ )
                    <h6 class="text-divider mb-4"><span>Pekerjaan {{ $i }}</span></h6>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">NO PK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control form-control-sm" placeholder="NO PK"
                                value="K3/23H/001" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">MASALAH</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="3" placeholder="Masalah" readonly>Perbaikan mesin las cogen</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">PENANGANAN</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="3" placeholder="PENANGANAN"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">MATERIAL</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="3" placeholder="MATERIAL"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">PERSENTASE</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control form-control form-control-sm text-right"
                                min="0" max="100" placeholder="PERSENTASE" value="" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right"></label>
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                <label for="customCheckbox1" class="custom-control-label">Selesai</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">KETERANGAN</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="3" placeholder="KETERANGAN"></textarea>
                        </div>
                    </div>
                    @endfor

                    <div class="form-group row" id="btn-tambah-container">
                        <label class="col-sm-2 col-form-label text-right"></label>
                        <div class="col-sm-4">
                            <button class="btn btn-default text-blue" id="btn-tambah">
                                <i class="fa fa-fw fa-plus"></i>
                                TAMBAH PEKERJAAN
                            </button>
                        </div>
                    </div>

                </div>
               <div class="card-footer">
                    <a href="{{ route('operation.reporting.index') }}" class="btn btn-default">
                        <i class="fa fa-fw fa-arrow-left"></i>
                        Kembali Ke Daftar Report
                    </a>


                    <div class="btn-group float-right">
                        <button class="btn btn-default text-blue" onclick="confirm('Setuju perubahan?')">
                            <i class="fa fa-fw fa-save"></i>
                            Simpan
                        </button>

                        <a class="btn btn-default text-maroon" onclick="confirm('Membatalkan perubahan?')">
                            <i class="fas fa-ban"></i>
                            Batalkan
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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
        $(function() {
            $("#data-table").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "columnDefs": [{
                    "width": "125px",
                    "targets": [0, 2]
                }, {
                    "className": "text-center",
                    "targets": [2]
                }],
                "order": [
                    [1, 'asc'],

                ],
                "buttons": [

                ]
            }).buttons().container().appendTo('#data-table_wrapper .col-md-6:eq(0)');


            $("#btn-tambah").on("click", function() {
                let template = `<h6 class="text-divider mb-4"><span>Pekerjaan {{ $i }}</span></h6>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">NO PK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control form-control-sm" placeholder="NO PK"
                                value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">MASALAH</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="3" placeholder="Masalah"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">PENANGANAN</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="3" placeholder="PENANGANAN"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">MATERIAL</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="3" placeholder="MATERIAL"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">PERSENTASE</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control form-control form-control-sm text-right"
                                min="0" max="100" placeholder="PERSENTASE" value="" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right"></label>
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                <label for="customCheckbox1" class="custom-control-label">Selesai</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">KETERANGAN</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="3" placeholder="KETERANGAN"></textarea>
                        </div>
                    </div>`;

                $("#btn-tambah-container").before(template);
            })

        });
    </script>
@endsection
