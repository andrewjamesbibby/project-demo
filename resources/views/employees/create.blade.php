@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Create Employee</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="name">First Name <span class="text-danger">*</span></label>
                            <input id="name" name="name" class="form-control" type="text" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name <span class="text-danger">*</span></label>
                            <input id="last_name" name="last_name" class="form-control" type="text" value="{{ old('last_name') }}">
                            @error('last_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="company_id">Company</label>
                            <select class="form-control" id="company_id" name="company_id">
                                <option value="">Please select</option>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
                                        {{ $company->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('company_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" class="form-control" type="text" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" class="form-control" type="text" value="{{ old('phone') }}">
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-actions d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

