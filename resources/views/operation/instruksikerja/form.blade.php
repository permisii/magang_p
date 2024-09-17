@extends('templates.web.template')

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card card-info card-outline">

                <div class="card-body">
                    <h6 class="text-divider mb-4"><span>Instruksi Data</span></h6>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">Pekerja</label>
                        <div class="col-sm-4">
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="">(K3-12H-001) Imron Rosadi</option>
                                <option value="">(K3-12H-001) Sucipto</option>
                                <option value="">(K3-12H-001) Fajar Suryansah</option>
                                <option value="">(K3-12H-001) Andi Setyono</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">Tanggal</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control form-control-sm datepicker" placeholder=""
                                value="" autocomplete="off">
                        </div>
                    </div>


                </div>

                <div class="card-footer">
                    <a href="{{ route('operation.instruksikerja.index') }}" class="btn btn-default">
                        <i class="fa fa-fw fa-arrow-left"></i>
                        Kembali Ke Daftar Instruksi Kerja
                    </a>

                    <div class="btn-group float-right">
                        <a href="{{ route('operation.instruksikerja.detail') }}" class="btn btn-default text-blue" onclick="confirm('Setuju perubahan?')">
                            <i class="fa fa-fw fa-save"></i>
                            Simpan
                        </a>

                        <a class="btn btn-default text-maroon" onclick="confirm('Membatalkan perubahan?')">
                            <i class="fas fa-ban"></i>
                            Batalkan
                        </a>

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection


@section('css')

    <link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker.css') }} ">
@stop

@section('scripts')
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
@stop
