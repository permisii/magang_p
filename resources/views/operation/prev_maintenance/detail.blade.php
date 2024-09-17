@extends('templates.web.template')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <span class="card-title">Subject : Part</span>
            </div>
            <div class="card-body">
                <h6 class="text-divider mb-4"><span>Lokasi</span></h6>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Unit</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="Unit Produksi 1" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Area</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="Stock Preparation 1" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Sub Area</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="Refiner" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <h6 class="text-divider mb-4 mt-5"><span>Asset Info</span></h6>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Tag</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="001-001-A21" readonly>
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
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="Motor" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Departemen</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="Listrik" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Brand</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="Siemens Motor" readonly>
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
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" value="M2BA315SMB4B3" readonly>
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
                                <input type="text" class="form-control form-control form-control-sm" value="In Use" readonly>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Specification</label>
                            <div class="col-8">
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm" readonly>Frame Size : 60mm
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
                    <div class="col-6">

                    </div>


                </div>

                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-6">
                        <a class="btn btn-sm btn-info" href="{{ route('master.assets.detail') }}" target="_blank"><i class="fas fa-external-link-alt"></i> Halaman Detail Assets</a>
                    </div>
                </div>

                <h6 class="text-divider mb-4 mt-5"><span>Part Info</span></h6>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Part Number</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="30 05 JR P6X" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Nama</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" value="Bearing" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>



                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Merk</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" value="SKF" readonly>
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
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm" readonly></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-6">
                        <a class="btn btn-sm btn-info" href="{{ route('master.assets.parts_detail') }}" target="_blank"><i class="fas fa-external-link-alt"></i> Halaman Detail Part</a>
                    </div>
                </div>



                <h6 class="text-divider mb-4 mt-5"><span>Task</span></h6>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Type</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="Runtime" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Due</label>
                            <div class="col-4">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="360 hrs" readonly>
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
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm" readonly>Pengantian sparepart berdasarkan habisnya masa runtime
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>

                <h6 class="text-divider mb-4 mt-5"><span>Inventory</span></h6>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Kode Barang</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control form-control-sm bg-gray-500" readonly placeholder="" value="K3-KO-PC0126 - Bearing ">
                            <small class="info">Index pada aplikasi gudang</small>
                        </div>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Nama Barang di Gudang</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control form-control-sm bg-gray-500" readonly placeholder="" value="3005JRP6X - Bearing SKF ">
                            <small class="info">Nama barang dalam aplikasi gudang</small>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-4 col-form-label text-right">Jumlah Stock Gudang</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control form-control-sm bg-gray-500 text-right" readonly placeholder="" value="12">
                            <small class="info">Jumlah stok sparepart menurut system inventory gudang</small>
                        </div>
                    </div>
                </div>


                <h6 class="text-divider mb-4 mt-5"><span>Tindakan</span></h6>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">Status Terakhir</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm" readonly placeholder="" value="Belum Dikerjakan">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label text-right">No. PK</label>
                            <div class="col-8">
                                <input type="text" class="form-control form-control form-control-sm bg-gray-100" placeholder="" value="">
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
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <div class="offset-sm-4 col-8">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">Sudah dilakukan tindakan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>


            </div>


            <div class="card-footer">
                <a href="{{ route('operation.prev_maintenance.index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke Daftar Preventive Maintenance
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
