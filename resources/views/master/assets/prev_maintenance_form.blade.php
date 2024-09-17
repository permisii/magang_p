@extends('templates.web.template')


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

        <div class="card card-info card-outline">

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Schedule Berdasarkan</label>

                            <div class="col-4">
                                <select name="" id="selector"
                                    class="form-control form-select form-select-sm form-control-sm">
                                    <option value="runtime">Berdasarkan Running Time</option>
                                    <option value="schedule" selected>Berdasarkan Jadwal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="maintenance_scheduled">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-4 col-form-label text-right">Tindakan</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control form-control-sm" placeholder=""
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6"></div>
                    </div>


                    <div class="row">

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-4 col-form-label text-right">Schedule Setiap</label>
                                {{-- <div class="col-4">
                                    <input type="text" class="form-control form-control form-control-sm text-right"
                                        value="">
                                </div> --}}
                                <div class="col-4">
                                    <select name="" id=""
                                        class="form-control form-select form-select-sm form-control-sm">
                                        <option value="">Harian</option>
                                        <option value="">Maintenance Bulanan</option>
                                        <option value="">Maintenance Tahunan</option>
                                        {{-- <option value="">Tahun</option>
                                        <option value="">Bulan</option>
                                        <option value="">Hari</option>
                                        <option value="">Jam</option> --}}
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
                                    <textarea name="" id="" cols="30" rows="5"
                                        class="form-control form-control-sm"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="maintenance_runtime">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-4 col-form-label text-right">Tindakan</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control form-control-sm" placeholder=""
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6"></div>
                    </div>

                    <div class="row">

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-4 col-form-label text-right">Schedule Setiap</label>
                                <div class="col-4">
                                    <input type="text" class="form-control form-control form-control-sm text-right"
                                        value="">
                                </div>

                                <label class="col-4 col-form-label">Jam</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-4 col-form-label text-right">Description</label>
                                <div class="col-8">
                                    <textarea name="" id="" cols="30" rows="5"
                                        class="form-control form-control-sm"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="card-footer">
                <a href="{{ route('master.assets.prev_maintenance_index') }}" class="btn btn-default">
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
    $(document).ready(function() {
        $('#selector').on('change', function() {
            if ( $(this).find(":selected").val() == 'schedule' ) {
                $("#maintenance_scheduled").show();
                $("#maintenance_runtime").hide();
            }
            else {
                $("#maintenance_scheduled").hide();
                $("#maintenance_runtime").show();
            }
        });

        $('#selector').trigger('change');
    });

</script>
@endsection
