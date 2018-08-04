@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>|
                <li><a href="{{ url('/admin/books') }}">Buku</a></li>|
                <li class="active">Tambah Buku</li>
            </ul>
            <div class="card">
                <div class="card-header">
                    Tambah Buku
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => route('books.store'),
                    'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('books._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection