@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Company Profile</div>
                <div class="card-body">

                    <img src="{{ $company->logo ? asset('storage/logos/' .$company->logo) : 'https://place-hold.it/100x100' }}"
                         class="company_profile mt-4 mb-4" alt="company_logo">

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $company->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <a href="mailto:{{ $company->email }}">{{ $company->email }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>
                                    <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

