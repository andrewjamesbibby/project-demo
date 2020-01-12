@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employee Profile</div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>First Name</td>
                            <td>{{ $employee->name }}</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>{{ $employee->last_name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>
                                <a href="tel:{{ $employee->phone }}">{{ $employee->phone }}</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

