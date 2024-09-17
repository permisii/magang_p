@extends('templates.web.template')

@section('content')
<div class="row">

    <div class="col-12">
        <div class="card card-info card-outline">

            <div class="card-body">
                <h6 class="text-divider mb-4"><span>Identity</span></h6>


                <div class="form-group row">
                    <label  class="col-2 col-form-label text-right">Unit</label>
                    <div class="col-sm-4">
                        <select name="" id="" class="form-control form-control-sm">

                            <option value="">Unit Produksi 1</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label text-right">Area</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control form-control-sm"value="Stock Preparation 1">
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label text-right">Kode</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control form-control form-control-sm"value="SP1">
                    </div>
                </div>




            </div>

            <div class="card-footer">
                <a href="{{ route('master.lokasi.index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar Area
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
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
