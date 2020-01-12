@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">System Logs</div>
                <div class="card-body">
                    <table id="logs_datatable" class="table table-bordered table-hover w-100">
                        <thead>
                        <tr>
                            <th>Action</th>
                            <th>Message</th>
                            <th>@</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
