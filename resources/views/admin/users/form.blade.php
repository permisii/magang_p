@extends('templates.web.template')

@section('content')
<div class="row">

    <div class="col-12">
        <div class="card card-info card-outline card-outline-tabs">

            <div class="card-body">
                <h6 class="text-divider mb-4"><span>Identity</span></h6>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Nama Lengkap</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control form-control-sm" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Username</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control form-control-sm" placeholder="" value="" autocomplete="off" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Departemen</label>
                    <div class="col-sm-3">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">All (Super User) </option>
                            <option value="">Listrik</option>
                            <option value="">Instrumen</option>
                            <option value="">Komputer</option>
                            <option value="">Mekanik</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2" checked>
                            <label class="form-check-label" for="exampleCheck2">Aktif</label>
                        </div>
                    </div>
                </div>

                <h6 class="text-divider mb-4"><span>Security</span></h6>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Password</label>
                    <div class="col-sm-4">
                        <input class="form-control form-control form-control-sm" type="password" name="password" autocomplete="new-password">
                        {{-- <input type="password" class="form-control form-control form-control-sm" placeholder="" value=""> --}}
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Retype Password</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control form-control form-control-sm" placeholder="" value="">
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <a href="{{ route('admin.users.index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar User
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
