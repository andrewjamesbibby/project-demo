@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Company Profile</div>
                <div class="card-body">

                    <img src="{{ $company->logo }}" class="mt-4 mb-4" width="100" height="100" alt="company_logo" style="border:solid 1px silver; width: 100px; height:100px;">

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $company->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $company->email }}</td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>{{ $company->website }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

