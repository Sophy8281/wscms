@extends('layouts.admin.admin_dashboard')
@section('breadcrumb')
Suppliers
@endsection
@section('content')
@include('partials.flash_messages')

<div>
    <a href="{{ URL::to('admin/suppliers/create')  }}" class="btn btn-success">
        <i class="fa fa-plus-circle"></i>
        New Supplier
    </a>
</div>
<div class="panel panel-default"></div>
    <div class="panel-heading"><strong>Suppliers</strong></div>
    <div class="panel-body">
        <table id="example" class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>#Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @forelse($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->id }}</td>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->address }}</td>
                <td>{{ $supplier->phone_number }}</td>
                <td>{{ $supplier->email }}</td>
                <td>{{ date('F d, Y h:m A', strtotime($supplier->created_at)) }}</td>
                <td>
                    <a href="{{ url('admin/suppliers/edit/'.$supplier->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                    <a href="{{ url('admin/suppliers/delete/'.$supplier->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this supplier-{{ $supplier->name }}?')"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="4">There are no suppliers yet.</td>
                </tr>
            @endforelse
        </table>
    </div>
</div>

@stop
