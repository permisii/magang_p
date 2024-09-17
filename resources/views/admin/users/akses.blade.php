@extends('templates.web.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info card-outline">
            <div class="card-body">
                <table id="data-table" class="table table-bordered table-striped table-hover nowrap">
                    <thead>
                        <th>Menu</th>
                        <th>View</th>
                        <th>Create</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Etc</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="toggleCheckAll('view')">Check All</button>
                                <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeall('view')">Remove All</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="toggleCheckAll('create')">Check All</button>
                                <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeall('create')">Remove All</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="toggleCheckAll('update')">Check All</button>
                                <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeall('update')">Remove All</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="toggleCheckAll('delete')">Check All</button>
                                <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeall('delete')">Remove All</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="toggleCheckAll('etc')">Check All</button>
                                <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeall('etc')">Remove All</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Dashboard</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-view">
                                    <label class="form-check-label">View</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-create">
                                    <label class="form-check-label">Create</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-update">
                                    <label class="form-check-label">Update</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-delete">
                                    <label class="form-check-label">Delete</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-etc">
                                    <label class="form-check-label">Etc</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>User</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-view">
                                    <label class="form-check-label">View</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-create">
                                    <label class="form-check-label">Create</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-update">
                                    <label class="form-check-label">Update</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-delete">
                                    <label class="form-check-label">Delete</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-etc">
                                    <label class="form-check-label">Etc</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Unit</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-view">
                                    <label class="form-check-label">View</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-create">
                                    <label class="form-check-label">Create</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-update">
                                    <label class="form-check-label">Update</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-delete">
                                    <label class="form-check-label">Delete</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-etc">
                                    <label class="form-check-label">Etc</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Instruksi Kerja</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-view">
                                    <label class="form-check-label">View</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-create">
                                    <label class="form-check-label">Create</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-update">
                                    <label class="form-check-label">Update</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-delete">
                                    <label class="form-check-label">Delete</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-etc">
                                    <label class="form-check-label">Etc</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Daily Report</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-view">
                                    <label class="form-check-label">View</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-create">
                                    <label class="form-check-label">Create</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-update">
                                    <label class="form-check-label">Update</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-delete">
                                    <label class="form-check-label">Delete</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-etc">
                                    <label class="form-check-label">Etc</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Pegawai Perbulan</td>
                            <td>
                                <div class="form-
                                check">
                                    <input type="checkbox" class="form-check-input checkbox-view">
                                    <label class="form-check-label">View</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-create">
                                    <label class="form-check-label">Create</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-update">
                                    <label class="form-check-label">Update</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-delete">
                                    <label class="form-check-label">Delete</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkbox-etc">
                                    <label class="form-check-label">Etc</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <a href="{{ route('admin.users.index') }}" class="btn btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i>
                    Kembali Ke User
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
        </div>
    </div>
</div>

<script>
    let checkAllStatus = {
        'view': false,
        'create': false,
        'update': false,
        'delete': false,
        'etc': false
    };

    function toggleCheckAll(column) {
        checkAllStatus[column] = !checkAllStatus[column];

        $('.checkbox-' + column).each(function() {
            this.checked = checkAllStatus[column];
        });
    }

    function removeall(column) {
        checkAllStatus[column] = false;
        $('.checkbox-' + column).each(function() {
            this.checked = false;
        });
    }
</script>
@endsection
