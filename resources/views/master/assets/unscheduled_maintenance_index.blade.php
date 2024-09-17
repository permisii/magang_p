@extends('templates.web.template')

@section('content')
<div class="row">

    <div class="col-12">
        <div class="card card-info card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-gray " href="{{ route('master.assets.detail') }}" role="tab">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.parts_index') }}"
                            role="tab">Parts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-gray" href="{{ route('master.assets.prev_maintenance_index') }}"
                            role="tab">Preventive Maintenance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('master.assets.unscheduled_maintenance_index') }}" role="tab">Unscheduled Maintenance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="{{ route('master.assets.timeline') }}"
                            role="tab">Timeline</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                Unscheduled Maintenance
            </div>
        </div>
    </div>
</div>

@endsection
