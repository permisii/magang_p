@extends('templates.web.template')

@section('content')
<div class="row">

    <div class="col-12">
        <div class="card card-info card-outline card-outline-tabs">

            <div class="card-body">
                <h6 class="text-divider mb-4"><span>Identity</span></h6>

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


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Sub Area</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control form-control-sm" placeholder="" value="" autocomplete="off">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Description</label>
                    <div class="col-4">
                        <textarea name="" id="" cols="30" rows="5" class="form-control" autocomplete="off"></textarea>
                    </div>
                </div>


            </div>

            <div class="card-footer">
                <a href="{{ route('master.lokasi.sublokasi_index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar Sub Area
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
