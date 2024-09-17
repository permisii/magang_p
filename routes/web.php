<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.login'))->name('pages.login');
Route::get('/dashboard', fn() => view('pages.dashboard')->with(["params" => ["title" => "Dashboard "]]))->name('pages.dashboard');
Route::get('/password', fn() => view('pages.password')->with(["params" => ["title" => "Dashboard "]]))->name('pages.password');

Route::prefix('admin')->group(function () {
    Route::prefix('users')->group(function () {
        $params = ["title" => "User"];
        Route::get('/', fn() => view('admin.users.index')->with(["params" => $params + ['subtitle' => 'Daftar User']]))->name('admin.users.index');
        Route::get('/detail', fn() => view('admin.users.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('admin.users.detail');
        Route::get('/form', fn() => view('admin.users.form')->with(["params" => $params + ['subtitle' => 'Tambah User']]))->name('admin.users.form');
        Route::get('/akses', fn() => view('admin.users.akses')->with(["params" => $params + ['subtitle' => 'Menu Akses']]))->name('admin.users.akses');

    });
});

Route::prefix('operation')->group(function () {
    Route::prefix('instruksikerja')->group(function () {
        $params = ["title" => "Operasional"];
        Route::get('/', fn() => view('operation.instruksikerja.index')->with(["params" => $params + ['subtitle' => 'Instruksi Kerja']]))->name('operation.instruksikerja.index');
        Route::get('/detail', fn() => view('operation.instruksikerja.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('operation.instruksikerja.detail');
        Route::get('/form', fn() => view('operation.instruksikerja.form')->with(["params" => $params + ['subtitle' => 'Tambah Instruksi Kerja']]))->name('operation.instruksikerja.form');
    });


    Route::prefix('instruksikerja/pekerjaan')->group(function () {
        $params = ["title" => "Operasional"];
        Route::get('/', fn() => view('operation.instruksikerja.pekerjaan.index')->with(["params" => $params + ['subtitle' => 'Instruksi Kerja']]))->name('operation.instruksikerja.pekeriaan.index');
        Route::get('/detail', fn() => view('operation.instruksikerja.pekerjaan.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('operation.instruksikerja.pekeriaan.detail');
        Route::get('/form', fn() => view('operation.instruksikerja.pekerjaan.form')->with(["params" => $params + ['subtitle' => 'Tambah Instruksi Kerja']]))->name('operation.instruksikerja.pekeriaan.form');
    });

    Route::prefix('reporting')->group(function () {
        $params = ["title" => "Operasional"];
        Route::get('/', fn() => view('operation.reporting.index')->with(["params" => $params + ['subtitle' => 'Laporan Harian']]))->name('operation.reporting.index');
        Route::get('/detail_belum_dikerjakan', fn() => view('operation.reporting.detail_belum_dikerjakan')->with(["params" => $params + ['subtitle' => 'Buat Laporan']]))->name('operation.reporting.detail_belum_dikerjakan');
        Route::get('/detail_sudah_dikerjakan', fn() => view('operation.reporting.detail_sudah_dikerjakan')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('operation.reporting.detail_sudah_dikerjakan');
        Route::get('/detail_draft', fn() => view('operation.reporting.detail_draft')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('operation.reporting.detail_draft');

    });
});

Route::prefix('master')->group(function () {
    Route::prefix('unit')->group(function () {
        $params = ["title" => "Unit "];
        Route::get('/', fn() => view('master.unit.index')->with(["params" => $params + ['subtitle' => 'Daftar Unit']]))->name('master.unit.index');
        Route::get('detail', fn() => view('master.unit.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('master.unit.detail');
        Route::get('form', fn() => view('master.unit.form')->with(["params" => $params  + ['subtitle' => 'Tambah Unit']]))->name('master.unit.form');
    });
});





// Route::prefix('admin')->group(function () {
//     Route::prefix('bagian')->group(function () {
//         $params = ["title" => "Departemen"];
//         Route::get('/', fn () => view('admin.bagian.index')->with(["params" => $params + ['subtitle' => 'Daftar Departemen']]))->name('admin.bagian.index');
//         Route::get('/detail', fn () => view('admin.bagian.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('admin.bagian.detail');
//         Route::get('/form', fn () => view('admin.bagian.form')->with(["params" => $params + ['subtitle' => 'Tambah Departemen']]))->name('admin.bagian.form');
//     });

//     Route::prefix('users')->group(function () {
//         $params = ["title" => "User"];
//         Route::get('/', fn () => view('admin.users.index')->with(["params" => $params + ['subtitle' => 'Daftar User']]))->name('admin.users.index');
//         Route::get('/detail', fn () => view('admin.users.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('admin.users.detail');
//         Route::get('/form', fn () => view('admin.users.form')->with(["params" => $params + ['subtitle' => 'Tambah User']]))->name('admin.users.form');
//     });
// });

// Route::prefix('master')->group(function () {
//     Route::prefix('unit')->group(function () {
//         $params = ["title" => "Unit "];
//         Route::get('/', fn () => view('master.unit.index')->with(["params" => $params + ['subtitle' => 'Daftar Unit']]))->name('master.unit.index');
//         Route::get('detail', fn () => view('master.unit.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('master.unit.detail');
//         Route::get('form', fn () => view('master.unit.form')->with(["params" => $params  + ['subtitle' => 'Tambah Unit']]))->name('master.unit.form');
//     });

//     Route::prefix('lokasi')->group(function () {
//         $params = ["title" => "Area"];
//         Route::get('/', fn () => view('master.lokasi.index')->with(["params" => $params + ['subtitle' => 'Daftar Area']]))->name('master.lokasi.index');
//         Route::get('form', fn () => view('master.lokasi.form')->with(["params" => $params + ['subtitle' => 'Tambah Area']]))->name('master.lokasi.form');
//         Route::get('detail', fn () => view('master.lokasi.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('master.lokasi.detail');

//         // Route::get('detail/sublokasi', fn () => view('master.lokasi.sublokasi_index')->with(["params" => $params + ['subtitle' => 'Daftar Sub Area']]))->name('master.lokasi.sublokasi_index');
//         // Route::get('detail/sublokasi/detail', fn () => view('master.lokasi.sublokasi_detail')->with(["params" => $params + ['subtitle' => 'Detail Sub Area']]))->name('master.lokasi.sublokasi_detail');
//         // Route::get('detail/sublokasi/form', fn () => view('master.lokasi.sublokasi_form')->with(["params" => $params + ['subtitle' => 'Tambah Sub Area']]))->name('master.lokasi.sublokasi_form');
//     });

//     Route::prefix('sublokasi')->group(function () {
//         $params = ["title" => "Sub Area"];

//         Route::get('/', fn () => view('master.sublokasi.sublokasi_index')->with(["params" => $params + ['subtitle' => 'Daftar Sub Area']]))->name('master.lokasi.sublokasi_index');
//         Route::get('detail', fn () => view('master.sublokasi.sublokasi_detail')->with(["params" => $params + ['subtitle' => 'Detail Sub Area']]))->name('master.lokasi.sublokasi_detail');
//         Route::get('form', fn () => view('master.sublokasi.sublokasi_form')->with(["params" => $params + ['subtitle' => 'Tambah Sub Area']]))->name('master.lokasi.sublokasi_form');
//     });


//     Route::prefix('assets')->group(function () {
//         $params = ["title" => "Assets"];

//         // GENERAL
//         Route::get('/', fn () => view('master.assets.index')->with(["params" => $params + ['subtitle' => "Daftar Asset"]]))->name('master.assets.index');
//         Route::get('detail', fn () => view('master.assets.detail')->with(["params" => $params + ['subtitle' => "General"]]))->name('master.assets.detail');
//         Route::get('form', fn () => view('master.assets.form')->with(["params" => $params + ['subtitle' => "Tambah Asset"]]))->name('master.assets.form');

//         // PARTS
//         Route::get('parts', fn () => view('master.assets.parts')->with(["params" => $params + ['subtitle' => "Part"]]))->name('master.assets.parts_index');
//         Route::get('parts/form', fn () => view('master.assets.parts_form')->with(["params" => $params  + ['subtitle' => 'Tambah Part']]))->name('master.assets.parts_form');
//         Route::get('parts/detail', fn () => view('master.assets.parts_detail')->with(["params" => $params  + ['subtitle' => 'Part General Info']]))->name('master.assets.parts_detail');
//         Route::get('parts/history', fn () => view('master.assets.parts_history')->with(["params" => $params  + ['subtitle' => 'Part History']]))->name('master.assets.parts_history');
//         Route::get('parts/history_form', fn () => view('master.assets.parts_history_form')->with(["params" => $params  + ['subtitle' => 'Tambah  History Part ']]))->name('master.assets.parts_history_form');

//         // PREVENTIVE MAINTENANCE
//         Route::get('prev_maintenance_index', fn () => view('master.assets.prev_maintenance')->with(["params" => $params  + ['subtitle' => 'Maintenance']]))->name('master.assets.prev_maintenance_index');
//         Route::get('prev_maintenance_detail', fn () => view('master.assets.prev_maintenance_detail')->with(["params" => $params  + ['subtitle' => 'Maintenance Schedule Detail']]))->name('master.assets.prev_maintenance_detail');
//         Route::get('prev_maintenance_detail_system', fn () => view('master.assets.prev_maintenance_detail_bysystem')->with(["params" => $params  + ['subtitle' => 'Maintenance Schedule Detail']]))->name('master.assets.prev_maintenance_detail_system');
//         Route::get('prev_maintenance_form', fn () => view('master.assets.prev_maintenance_form')->with(["params" => $params  + ['subtitle' => 'Maintenance Form']]))->name('master.assets.prev_maintenance_form');

//         // TIMELINE
//         Route::get('timeline', fn () => view('master.assets.timeline')->with(["params" => $params  + ['subtitle' => "History"]]))->name('master.assets.timeline');
//     });
// });


// Route::prefix('operation')->group(function () {

//     // JADWAL PRODUKSI
//     Route::prefix('jadwal_prod')->group(function () {
//         $params = ["title" => "Jadwal Produksi"];

//         // GENERAL
//         Route::get('/', fn () => view('operation.jadwal_prod.index')->with(["params" => $params + ['subtitle' => "Daftar Jadwal Produksi"]]))->name('operation.jadwal_prod.index');
//         Route::get('/form', fn () => view('operation.jadwal_prod.form')->with(["params" => $params + ['subtitle' => 'Tambah Baru ']]))->name('operation.jadwal_prod.form');
//         Route::get('/detail', fn () => view('operation.jadwal_prod.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('operation.jadwal_prod.detail');
//     });

//     // JADWAL PRODUKSI
//     Route::prefix('jadwal_maintenance')->group(function () {
//         $params = ["title" => "Jadwal Maintenance"];

//         // GENERAL
//         Route::get('/', fn () => view('operation.jadwal_maintenance.index')->with(["params" => $params + ['subtitle' => "Daftar Jadwal Maintenance"]]))->name('operation.jadwal_maintenance.index');
//         Route::get('/form', fn () => view('operation.jadwal_maintenance.form')->with(["params" => $params + ['subtitle' => 'Tambah Baru ']]))->name('operation.jadwal_maintenance.form');
//         Route::get('/detail', fn () => view('operation.jadwal_maintenance.detail')->with(["params" => $params + ['subtitle' => 'Detail']]))->name('operation.jadwal_maintenance.detail');
//     });

//     // PREVENTIVE MAINTENANCE
//     Route::prefix('prev_maintenance')->group(function () {
//         $params = ["title" => "Preventive Maintenance"];

//         // GENERAL
//         Route::get('/', fn () => view('operation.prev_maintenance.index')->with(["params" => $params + ['subtitle' => "Daftar Prefentive Maintenance"]]))->name('operation.prev_maintenance.index');
//         Route::get('/detail', fn () => view('operation.prev_maintenance.detail')->with(["params" => $params + ['subtitle' => "Detail"]]))->name('operation.prev_maintenance.detail');
//         Route::get('/detail_asset', fn () => view('operation.prev_maintenance.detail_asset')->with(["params" => $params + ['subtitle' => "Detail"]]))->name('operation.prev_maintenance.detail_asset');
//     });

//     // UNSCHEDULED MAINTENANCE
//     Route::prefix('unscheduled_maintenance')->group(function () {
//         $params = ["title" => "Unscheduled Maintenance"];

//         // GENERAL
//         Route::get('/', fn () => view('operation.unscheduled_maintenance.index')->with(["params" => $params + ['subtitle' => "Daftar Unscheduled Maintenance"]]))->name('operation.unscheduled_maintenance.index');
//     });
// });


// Route::prefix('report')->group(function () {
//     $params = ["title" => "Alarm Berdasarkan Bulan"];
//     Route::get('berdasarbulan', fn () => view('report.alertberdasarbulan')->with(["params" => $params + ['subtitle' => "Daftar"]]))->name('report.berdasarbulan.index');
// });
