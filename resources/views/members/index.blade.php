@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>&nbsp;
                <li class="active">Member</li>
            </ul>
            <div class="card">
                <div class="card-header">
                    Member
                </div>
                <div class="card-body">
                    <p> <a class="btn btn-primary" href="{{ url('/admin/members/create') }}">Tambah</a> </p>
                    {!! $html->table(['class'=>'table-striped']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    {!! $html->scripts() !!}
@endsection