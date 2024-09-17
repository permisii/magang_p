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
                            <label class="col-4 col-form-label text-right">Tindakan</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" placeholder="" value="Overhaul karena masa runtime habis" readonly>
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
                                <input type="text" class="form-control form-control form-control-sm text-right"  value="7000" readonly>

                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm" placeholder="" value="Jam" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Description</label>
                            <div class="col-8">
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm" readonly>Overhaul karena masa runtime habis</textarea>
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
                        <i class="fa fa-fw fa-save"></i> Simpan
                    </button>

                    <a class="btn btn-default text-maroon" onclick="confirm('Membatalkan perubahan?')">
                        <i class="fas fa-ban"></i> Batalkan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
