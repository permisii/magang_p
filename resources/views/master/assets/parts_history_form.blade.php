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
                <li class="breadcrumb-item">Part : Rotor</li>
            </ol>
        </div>
        <div class="card card-info card-outline card-outline-tabs">
            <div class="card-header">

            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Tindakan</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6"></div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Jenis Tindakan</label>
                            <div class="col-8">
                                <select name="" id="" class="form-control form-control-sm">
                                    <option value="">Pasang Baru</option>
                                    <option value="">Penggantian Rusak</option>
                                    <option value="">Scheduled Maintenance</option>
                                    <option value="">Preventive Maintenance</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-6"></div>
                </div>




                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Description</label>
                            <div class="col-8">
                                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <div class="offset-sm-4 col-8">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">Reset Runtime</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6"></div>
                </div>


            </div>

            <div class="card-footer">
                <a href="{{ route('master.assets.parts_history') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar History
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
