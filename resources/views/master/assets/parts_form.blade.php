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
        <div class="card card-outline card-info">

            <div class="card-header">
                    {{-- Part Detail --}}
            </div>

            <div class="card-body">
                <h6 class="text-divider mb-4"><span>Identity</span></h6>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Part Number</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" placeholder="" value="">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Nama</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Brand</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" placeholder="" value="">
                                <small class="info">Merk perangkat yang dipakai</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Description</label>
                            <div class="col-8">
                                <textarea name="" id="" cols="30" rows="5"  class="form-control" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <h6 class="text-divider mb-4 mt-5"><span>Waranty</span></h6>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Purchasing Date</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm datepicker" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Waranty Start Date</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm datepicker" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Vendor</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Waranty End Date</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm datepicker" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Vendor Part Number</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <h6 class="text-divider mb-4 mt-5"><span>Usage</span></h6>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Jenis</label>

                            <div class="col-8">
                                <select name="" id="" class="form-control form-select form-select-sm form-control-sm">
                                    <option value="">Consumable</option>
                                    <option value="">Fast Moving Part</option>
                                    <option value="">Slow Moving Part</option>
                                </select>
                                <small class="info">Jenis part menurut masa pakai</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Jumlah Dipakai</label>
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm text-right" placeholder="" value="">
                                <small class="info">Jumlah dipakai dalam 1 asset</small>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Runtime</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm text-right" placeholder="" value="">
                                <small class="info">Masa Pakai Dalam Jam Kerja</small>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Lifetime</label>
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm text-right" placeholder="" value="">
                                <small class="info">Masa Pakai Dalam Tahun</small>
                            </div>
                            <div class="col-4">
                                <select name="" id="" class="form-control form-select form-select-sm form-control-sm">
                                    <option value="">Tahun</option>
                                    <option value="">Bulan</option>
                                    <option value="">Hari</option>
                                    <option value="">Jam</option>
                                </select>
                                <small class="info">Satuan Masa Pakai</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Runtime Alert</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm text-right" placeholder="" value="">
                                <small class="info">Pemberitahuan sisa jam kerja (dalam satuan jam)</small>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Lifetime Alert</label>
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm text-right" placeholder="" value="">
                                <small class="info">Pemberitahuan sisa masa pakai </small>
                            </div>
                            <div class="col-4">
                                <select name="" id="" class="form-control form-select form-select-sm form-control-sm">
                                    <option value="">Tahun</option>
                                    <option value="">Bulan</option>
                                    <option value="">Hari</option>
                                    <option value="">Jam</option>
                                </select>
                                <small class="info">Satuan Masa Pakai</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">

                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Dipasang</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm datepicker" placeholder="" value="">
                                <small class="info">Tanggal Dipasang</small>
                            </div>
                        </div>
                    </div>
                </div>



                <h6 class="text-divider mb-4 mt-5"><span>Inventory</span></h6>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Kode Barang</label>
                        <div class="col-8">
                            <select class="select2 form-control-sm" data-placeholder="Kode barang pada aplikasi gudang" data-dropdown-css-class="select2-info" style="width: 100%;">
                                    <option>K3-KO-DA0044 - Coil Rotator</option>
                                    <option>K3-KO-PC0683 - Shaft</option>
                                    <option>K3-KO-PC0126 - Brush</option>
                                    <option>K3-KO-BM1220 - Magnet Rotator</option>

                            </select>
                            <small class="info">Kode index dalam aplikasi gudang</small>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Nama Barang di Gudang</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control form-control-sm bg-gray-500" readonly placeholder="" value="">
                            <small class="info">Nama barang dalam aplikasi gudang</small>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Jumlah Stock Gudang</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control form-control-sm bg-gray-500" readonly placeholder="" value="">
                            <small class="info">Jumlah stok sparepart menurut system inventory gudang</small>
                        </div>
                    </div>
                </div>



            </div>

            <div class="card-footer">
                <a href="{{ route('master.assets.parts_index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar Part
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
        $('.datepicker').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoApply": true,
            locale: {
                format: 'DD/MM/YYYY'
            }
        })
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

