@extends('templates.web.template')

@section('content')
<div class="row">

    <div class="col-12">
        <div class="card card-info card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('master.assets.detail') }}" role="tab">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.prev_maintenance_index') }}" role="tab">Maintenance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.timeline') }}" role="tab">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.parts_index') }}" role="tab">Parts</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h6 class="text-divider mb-4"><span>Identity</span></h6>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Sub Area</label>
                            <div class="col-8">
                                <select name="" id="" class="form-control form-control-sm">
                                    <optgroup label="Unit Produksi 1">
                                    <optgroup label="&nbsp;&nbsp; Stock Preparation 1">
                                        <option value="">&nbsp;&nbsp;&nbsp;&nbsp;Pulper</option>
                                        <option value="" selected>&nbsp;&nbsp;&nbsp;&nbsp;Refiner</option>
                                        <option value="">&nbsp;&nbsp;&nbsp;&nbsp;Deflaker</option>
                                    </optgroup>
                                    </optgroup>
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
                            <label class="col-4 col-form-label text-right">Tag</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm"value="001-001-A21">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>



                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Asset</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm"value="Motor">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-2 col-form-label text-right">Departemen</label>
                    <div class="col-sm-4">
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">All</option>
                            <option value="" selected>Listrik</option>
                            <option value="">Instrumen</option>
                            <option value="">Komputer</option>
                            <option value="">Mekanik</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Brand</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm"value="Siemens Motor">
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
                            <label class="col-4 col-form-label text-right">Model</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm"value="M2BA315SMB4B3">
                                <small class="info">Model perangkat yang dipakai</small>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Status</label>
                            <div class="col-8">
                                <select name="" id="" class="form-control  form-control-sm">

                                    <option value="" selected>In Use</option>
                                    <option value="">Unused</option>
                                </select>

                                <small class="info">Status terakhir perangkat </small>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Spesification</label>
                            <div class="col-8">
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm">Frame Size : 60mm
Shaft/Gear Type : Pinion Shaft Type
Gear Ratio : -
Type : Lead Wire Type
Time Rating : Continuous
Output : 6W
Voltage / Frequency / Current :
    Single-Phase 220VAC / 50Hz / 0.103A
    Single-Phase 220VAC / 60Hz / 0.091A
    Single-Phase 230VAC / 50Hz / 0.107A
    Single-Phase 230VAC / 60Hz / 0.094A
Starting Torque (Motor Shaft) :
    Single-Phase 220VAC / 50Hz: 38mN･m
    Single-Phase 220VAC / 60Hz: 40mN･m
    Single-Phase 230VAC / 50Hz: 45mN･m
    Single-Phase 230VAC / 60Hz: 40mN･m
Speed When Gearhead is Attached : Depends on the combination gear head.
Permissible Torque When Gearhead is Attached : Depends on the combination gear head.
Permissible Load Inertia J : Depends on combination.
Rotation Direction : Depends on the combination gear head.
Capacitance : 0.6μF
Standard : GB
CE Marking : affixed
Overheat Protection Device Type : Impedance protected
Mass: Motor : 0.7kg</textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Description</label>
                            <div class="col-8">
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm">Menggantikan motor tipe M1BA315SMB4B2 yang sudah tidak diproduksi</textarea>
                            </div>
                        </div>
                    </div>

                </div>



{{--
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <div class="offset-sm-4 col-8">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2" checked>
                                    <label class="form-check-label" for="exampleCheck2">Masih digunakan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div> --}}

                <h6 class="text-divider mb-4 mt-5"><span>Waranty</span></h6>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Purchasing Date</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm datepicker"value="10/09/2022">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Waranty Start Date</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm datepicker"value="10/09/2022">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Vendor</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm"value="Siemens Marketing Service Indonesia">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Waranty End Date</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm datepicker"value="09/09/2023">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Vendor Part Number</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm"value="M2BA315SMB4B3">
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
                            <label class="col-4 col-form-label text-right">Runtime</label>
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm text-right"value="7000">
                                <small class="info">Masa Pakai Dalam Jam Kerja</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Lifetime</label>
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm text-right"value="5">
                                <small class="info">Masa pakai dalam satuan</small>
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
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm text-right"value="360">
                                <small class="info">Peringatan saat runtime tersisa (jam)</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Lifetime Alert</label>
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm text-right"value="6">
                                <small class="info">Peringatan saat sisa lifetime </small>
                            </div>
                            <div class="col-4">
                                <select name="" id="" class="form-control form-select form-select-sm form-control-sm">
                                    <option value="">Tahun</option>
                                    <option value="" selected>Bulan</option>
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
                            <label class="col-4 col-form-label text-right">Runtime Berjalan</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm text-right bg-gray-500" readonly value="240">
                                <small class="info">Masa Pakai Dalam Jam Kerja</small>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Tanggal Mulai Pakai </label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm datepicker"value="25/09/2023">
                                <small class="info">Tanggal Dipasang</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Sisa Runtime</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm text-right bg-gray-500" readonly value="6760">
                                <small class="info">Masa Pakai Dalam Jam Kerja</small>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Akhir Masa Lifetime</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-500" readonly value="24/09/2028">
                                <small class="info">Tanggal akhir pemakaian menurut Lifetime</small>
                            </div>
                        </div>
                    </div>
                </div>


                <h6 class="text-divider mb-4 mt-5"><span>Inventory</span></h6>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Index Gudang</label>
                        <div class="col-8">
                            <select class="select2 form-control-sm" data-placeholder="Kode barang pada aplikasi gudang" data-dropdown-css-class="select2-info" style="width: 100%;">
                                    <option selected>K3-KO-DA0044 - Motor AC Siemens M2BA315SMB4B3</option>
                                    <option>K3-KO-PC0683 - Motor AC Hitachi JSI8937490 </option>
                                    <option>K3-KO-PC0126 - Motor AC Mitsubishi USHDHF9273</option>
                                    <option>K3-KO-BM1220 - Motor AC Honda HAKSDJHF738397</option>

                            </select>
                            <small class="info">Kode barang dalam aplikasi gudang</small>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Nama Gudang</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control form-control-sm bg-gray-500" readonly placeholder="" value="Motor AC Siemens M2BA315SMB4B3">
                            <small class="info">Nama barang dalam aplikasi gudang</small>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Dimensi</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control form-control-sm bg-gray-500" readonly placeholder="" value="22KVA">
                            <small class="info">Info dimensi dalam aplikasi gudang</small>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Stock Gudang</label>
                        <div class="col-4">
                            <input type="text" class="form-control form-control form-control-sm bg-gray-500 text-right" readonly placeholder="" value="2">
                            <small class="info">Jumlah stok sparepart menurut system inventory gudang</small>
                        </div>
                    </div>
                </div>

            </div>
            {{-- end card body --}}

            <div class="card-footer">
                <a href="{{ route('master.assets.index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar Assets
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
<script src="{{ asset('plugins/plugins/daterangepicker/daterangepicker.js') }}"></script>

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
