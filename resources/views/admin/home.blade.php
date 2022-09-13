@extends('layouts.admin.admin_dashboard')
@section('breadcrumb')
Home
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header bg-primary text-light">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in Boss!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
