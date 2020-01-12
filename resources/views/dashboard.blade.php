@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    @lang('custom.companies')
                </div>
                <div class="card-body">
                    Total Companies: {{ $stats['total_companies'] }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    @lang('custom.employees')
                </div>
                <div class="card-body">
                    Total Employees: {{ $stats['total_employees'] }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    @lang('custom.system_language')
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('languages.store') }}">
                        @csrf
                        <div class="form-group">
                            <select class="form-control" id="language" name="language">
                                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                                <option value="es" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>Spanish</option>
                            </select>
                            @error('language')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="btn btn-secondary" type ="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

