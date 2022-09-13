@extends('layouts.admin.admin_dashboard')
@section('breadcrumb')
<a href="{{ URL::to('admin/suppliers') }}">Suppliers</a> / Edit
@endsection
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-ticket"></i>
        <strong>Edit Supplier</strong>
    </div>
    <div class="panel-body">

        <form action="{{ url('admin/suppliers/edit/'.$supplier->id) }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                Name
                <p class="hint--top" data-hint="Name" id="input-field">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $supplier->name }}" placeholder="Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
            </div>
            <div class="form-group">
                Address
                <p class="hint--top" data-hint="address" id="input-field">
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $supplier->address }}">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
            </div>
            <div class="form-group">
                Phone Number
                <p class="hint--top" data-hint="Phone" id="input-field">
                    <input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ $supplier->phone_number }}" placeholder="Phone Number">
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
            </div>
            <div class="form-group">
                Email
                <p class="hint--top" data-hint="Email" id="input-field">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $supplier->email }}" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="{{ url('/admin/suppliers') }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
<br>
@stop
