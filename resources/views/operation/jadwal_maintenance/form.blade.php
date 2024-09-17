@extends('templates.web.template')


@section('content')
<div class="row">

    <div class="col-12">
        <div class="card card-info card-outline card-outline-tabs">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Type</label>
                            <div class="col-8">
                                <select name="" id="" class="form-control form-control-sm">
                                    <option value="">Bulanan</option>
                                    <option value="">Tahunan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Waktu</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm reservationtime" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Sub Area yang terlibat</label>
                            <div class="col-8 select2-info">
                                <select class="select2" multiple="multiple" data-placeholder="Area yang terlibat" data-dropdown-css-class="select2-info" style="width: 100%;">
                                    <optgroup label="Unit Produksi 1 - Unit 1">
                                        <option value="sp1">Stock Preparatin 1 - SP1</option>
                                        <option value="pm2">Paper Machine 1 - PM1</option>

                                        <option value="sp2">Stock Preparatin 2 - SP2</option>
                                        <option value="pm2">Paper Machine 2 - PM2</option>
                                    </optgroup>

                                    <optgroup label="Unit Produksi 2 - Unit 2">
                                        <option value="sp3">Stock Preparatin 3 - SP3</option>
                                        <option value="pm3">Paper Machine 3 - PM3</option>

                                        <option value="sp5">Stock Preparatin 5 - SP5</option>
                                        <option value="pm5">Paper Machine 5 - PM5</option>
                                    </optgroup>


                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Description</label>
                            <div class="col-8">
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-footer">
                <a href="{{ route('operation.jadwal_maintenance.index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar Maintenance
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
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $(function () {
        $('.select2').select2()
        $('.reservationtime').daterangepicker({
            "timePicker": true,
            "timePicker24Hour": true,
            "timePickerIncrement": 30,
            locale: {
                format: 'DD/MM/YYYY H:mm'
            }
        })
    });
</script>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
